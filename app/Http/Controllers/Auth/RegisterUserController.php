<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMailer;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

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

        try {
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();

            // Authenticate the user
            Auth::login($user);


            /// Sending Otp at users email

            $id = auth()->user()->id;
            $user = User::where('id', $id)->get();
            $otp = rand(100000, 999999);
            $expiresAt = now()->addMinutes(5);

            $user->otp = $otp;
            $user->otp_expires_at = $expiresAt;
            $user->save();



            $mailer = new DynamicMailer('Verify Your Email', 'Please verify your email address by entering the OTP below.', $otp);
            Mail::to($user->email)->send($mailer);

            //sending otp in view

            $resendAvailable = $user->otp_expires_at && $user->otp_expires_at->gt(now()->addMinutes(-5));
            $otpExpiresAt = $user->otp_expires_at;

            return view('verify-otp', compact('resendAvailable', 'otpExpiresAt'));
            // Redirect to the index route

        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error registering user: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to register user'], 500);
        }
    }
}
