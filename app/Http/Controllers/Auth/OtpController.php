<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    public function verifyOtp(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();
        $otp = $request->input('otp');

        if ($user->otp === $otp && $user->otp_expires_at > now()) {
            // OTP is valid, update user's email as verified
            $user->email_verified_at = now();
            $user->save();

            return response()->json(['message' => 'Email verified successfully']);
        } else {
            return response()->json(['message' => 'Invalid OTP or OTP has expired'], 422);
        }
    }

    public function resendOtp(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get();
        $otp = rand(100000, 999999);
        $expiresAt = now()->addMinutes(5);

        $user->otp = $otp;
        $user->otp_expires_at = $expiresAt;
        $user->save();

        $mailer = new DynamicMailer('Verify Your Email', 'Please verify your email address by entering the OTP below.', $otp);
        Mail::to($user->email)->send($mailer);

        return response()->json(['message' => 'OTP resent successfully']);
    }
}
