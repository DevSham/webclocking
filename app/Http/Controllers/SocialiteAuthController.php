<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class SocialiteAuthController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Google login authentication
     *
     * @return void
     */
    public function loginWithGoogle()
    {
        try {

            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if($user){
                Auth::login($user);
                return redirect('/dashboard');
            }

            else{
                $createUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => encrypt('test@123')
                ]);

                Auth::login($createUser);
                return redirect('/dashboard');
            }

        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
