<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        $url = Socialite::driver('google')->stateless()->redirect()->getTargetUrl();
        return response()->json(['url' => $url]);
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt(Str::random(24)),
                ]
            );

            // Create Sanctum token
            $token = $user->createToken('GoogleToken')->plainTextToken;
            return redirect('/')->with('token', $token);
            // return response()->json([
            //     'token' => $token,
            //     'user' => $user,
            // ]);
        } catch (Exception $e) {
            Log::error($e);
            return response()->json(['error' => 'Google login failed'], 500);
        }
    }
}
