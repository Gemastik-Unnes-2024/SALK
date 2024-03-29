<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle() :RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() :RedirectResponse
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $registeredUser = User::where('email', $googleUser->email)->first();

        if (!$registeredUser) {
            // Create a new user since there is no user with this email
            $registeredUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt(Str::random()), // Generate a random password
                'google_id' => $googleUser->id,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);
        } elseif (!$registeredUser->google_id) {
            // Update the existing user with Google ID and tokens
            $registeredUser->update([
                'google_id' => $googleUser->id,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);
        }

        Auth::login($registeredUser);

        // Redirect to url as requested by user, if empty use /dashboard page as generated by Jetstream
        return redirect('/dashboard');
    }
}
