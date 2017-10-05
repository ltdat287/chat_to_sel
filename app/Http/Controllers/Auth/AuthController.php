<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Models\UserDetail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $redirectTo = '/home';

    /**
     * @param $provider
     * @return mixed
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect($this->redirectTo);
    }

    /**
     * @param $user
     * @param $provider
     * @return $this|\Illuminate\Database\Eloquent\Model|null|static
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $user_detail = UserDetail::create([
            'first_name' => $user->name,
            'gender' => isset($user->user['gender']) ? Helper::detectGenderUser($user->user['gender']) : null,
            'avatar' => $user->avatar,
        ]);

        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'user_detail_id' => $user_detail->id
        ]);
    }
}
