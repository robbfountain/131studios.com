---
title: Using Laravel Socialite to Login to Nova
categories: Development, Laravel
summary: In this blog post we show you how to lock down your Laravel Nova dashboard to members of your organization only.
preview_image:
preview_image_twitter:
hidden: false
published: 3/18/20
---

I have a few different applications and admin panels that I use pretty frequently throughout my day-to-day.  All of these application have basic email and password authentication.  Recently I wanted to change this to allow acces to these systems based on my corporate account `@131studios.com`

Currently I'm the only one that accesses these systems and in the future, if anyone joins the team, they will also need access to these as well.  Since I use G-Suite for email, this process is fairly simple using [Laravel](https://laravel.com) and [Laravel Socialite](https://laravel.com/docs/6.x/socialite)


First we'll start by installing Socialite

```
composer require laravel/socialite
```

The next step is to configure our socialite driver.  In this case we will be using Google for our authentication and authorization.  To do this we need to add a driver to our ```config/services.php```

```php
'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_CLIENT_REDIRECT'),
    ],
```

then update your ```.env``` with the appropriate values

```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_CLIENT_REDIRECT=
```

We're going to need 2 routes to handle our redirect and callback for our Oauth controller.  In your ```web.php``` create the following routes

```php
Route::get('/oauth/{provider}', 'Auth\OauthController@redirect')->name('oauth.redirect');
Route::get('/oauth/{provider}/callback', 'Auth\OauthController@callback');
```

We're going to create a controller to handle our Oauth requests.  I like to use the ```App\Http\Controllers\Auth``` namespace. 

```
php artisan make:controller Auth\OauthController
```

This controller will handle redirecting the user to the Oauth Provider as well as handling the authorization and authentication of the user when they pass through.  Let's handle the former first.  
We'll create a ```redirect()``` method to handle the redirect to the provider

```php
...
  /**
     * @param $provider
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
...
```
  
Let's break this down. Since we can support multiple drivers such as Google, Github, Facebook and Twitter we will accept the ```$provider``` variable from our route. Then we will simply tell Socialite to redirect us to our provider's Oauth consent screen.

Once the user accepts the consent banner they are redirected back to our callback route that was set in your ENV.  At that point we are going to need to either fetch an existing user or create the user if they do not currently exist. Remember we are only going to do this for users that are a member of our organization only, ```131studios.com```

In our ```OauthController.php``` let's create a few methods to do that

```php
... 
  
   /**
     * @var array
     */
    protected $allowedDomains = [
        '@131studios.com',
    ];
  
  /**
     * @param $provider
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if ($this->isAnAllowedDomainUser($user)) {
            $this->findOrCreateUser($user);

            return redirect()->intended('/dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'You must be a member of the 131Studios Organization to Login',
        ]);
	}

 /**
     * @param $user
     *
     * @return bool
     */
    private function isAnAllowedDomainUser($user)
    {
        return Str::endsWith($user->email, $this->allowedDomains);
    }

    /**
     * @param $user
     *
     */
    private function findOrCreateUser($user)
    {
        $authorizedUser = User::firstOrCreate(
            ['email' => $user->getEmail()],
            ['name' => $user->getName(), 'password' => bcrypt(Str::random(15)),]
        );

        $this->guard()->login($authorizedUser);
    }

    /**
     * @return mixed
     */
    private function guard()
    {
        return Auth::guard(config('auth.defaults.guard'));
    }
```

The first part of the ```callback``` method will grab the user from the socialite driver.  We'll store that user for use throughout.  

The next part is very important to ensure that only users within our organization are allowed access. First we check whether the user is allowed.  We do this by verifying the domain portion of the Oauth user to our array of ```$allowedDomains``` .  We do this with a simple string comparison method

```php
 /**
     * @param $user
     *
     * @return bool
     */
    private function isAnAllowedDomainUser($user)
    {
        return Str::endsWith($user->email, $this->allowedDomains);
    }
```

If the user is allowed we'll either grab the user from our database or create a new user based off the Oauth user.  Once we either fetch the user or create a new user, we will log them in using our default guard

```php
 /**
     * @param $user
     *
     */
    private function findOrCreateUser($user)
    {
        $authorizedUser = User::firstOrCreate(
            ['email' => $user->getEmail()],
            ['name' => $user->getName(), 'password' => bcrypt(Str::random(15)),]
        );

        $this->guard()->login($authorizedUser);
    }

    /**
     * @return mixed
     */
    private function guard()
    {
        return Auth::guard(config('auth.defaults.guard'));
    }
```

Finally we redirect the user to their dashboard or we will send them back to the login page with an error.

```php
/**
     * @param $provider
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback($provider)
    {
       ...

        if ($this->isAnAllowedDomainUser($user)) {
            $this->findOrCreateUser($user);

            return redirect()->intended('/dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'You must be a member of the 131Studios Organization to Login',
        ]);
	}
```

At this point we are ready to accept Oauth logins to our administrator backends.  
