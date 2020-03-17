<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

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
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if ($this->isAnAllowedDomainUser($user)) {
            $this->findOrCreateUser($user);

            return redirect('/home');
        }

        return redirect('/login')
            ->withErrors('You must be a member of the 131Studios Organization to Login');
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
            ['name' => $user->getName(), 'password' => bcrypt(Str::random(8)),]
        );

        Auth::loginUsingId($authorizedUser->id);
    }

    /**
     * @param $provider
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}
