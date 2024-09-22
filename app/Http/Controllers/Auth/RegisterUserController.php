<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMailer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class RegisterUserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' =>  [
                'required',
                'string',
                'min:8', // Minimum length of 8 characters
                'regex:/[a-z]/', // must contain at least one lowercase letter
                'regex:/[A-Z]/', // must contain at least one uppercase letter
                'regex:/[0-9]/', // must contain at least one digit
                'regex:/[@$!%*?&]/', // must contain a special character
            ],
        ], [
            'password.regex' => 'Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

        $otp = rand(100000, 999999);
        $expiresAt = Carbon::now()->addMinutes(5);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'otp' => $otp,
            'otp_expires_at' => $expiresAt,
            'is_verified' => false,
        ]);

        Mail::to($user->email)->send(new DynamicMailer(
            'Your OTP for Account Verification',
            'Thank you for registering. Please use this OTP to verify your account.',
            $otp
        ));

        // Store necessary information in session
        session([
            'user_id' => $user->id,
            'otp' => $otp,
            'otp_expires_at' => $expiresAt
        ]);



        return redirect()->route('verify_otp_page')->with('success', 'Registration successful. Please verify your email.');
    }
}
