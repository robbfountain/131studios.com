<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Nova\Nova;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class OauthController.
 */
class OauthController extends Controller
{
    /**
     * @var array
     */
    protected $allowedDomains = [
        '@131studios.com',
    ];

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if ($this->isAnAllowedDomainUser($user)) {
            $this->findOrCreateUser($user);

            return redirect()->intended(Nova::path());
        }

        return redirect()->route('nova.login')->withErrors([
            'email' => 'You must be a member of the 131Studios Organization to Login',
        ]);
    }

    /**
     * @param $user
     * @return bool
     */
    private function isAnAllowedDomainUser($user)
    {
        return Str::endsWith($user->email, $this->allowedDomains);
    }

    /**
     * @param $user
     */
    private function findOrCreateUser($user)
    {
        $authorizedUser = User::firstOrCreate(
            ['email' => $user->getEmail()],
            ['name' => $user->getName(), 'password' => bcrypt(Str::random(8))]
        );

        $this->guard()->login($authorizedUser);
    }

    /**
     * @return mixed
     */
    private function guard()
    {
        return Auth::guard(config('nova.guard'));
    }

    /**
     * @param $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}
