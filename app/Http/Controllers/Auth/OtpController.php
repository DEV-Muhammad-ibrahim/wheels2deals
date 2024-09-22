<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMailer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    public function verifyOtp(Request $request)
    {

        $request->validate(['otp' => 'required|string|min:6|max:6']);

        $user = User::findOrFail(session('user_id'));
        if ($request->otp === $user->otp && Carbon::now()->lt($user->otp_expires_at)) {
            $user->update([
                'verified' => true,
                'otp' => null,
                'otp_expires_at' => null,
            ]);

            Auth::login($user);
            session(['otp_verified' => true]);

            session()->forget(['otp', 'user_id', 'otp_expires_at']);

            Mail::to($user->email)->send(new DynamicMailer(
                'Email Verified',
                'Your account has been verified',
            ));

            return redirect()->route('index');
        }

        return back()->with('error', 'Invalid or expired OTP');
    }

    public function resendOtp()
    {
        Log::info('resendOtp method called');

        try {
            $userId = session('user_id');
            if (!$userId) {
                Log::error('User ID not found in session');
                return response()->json(['success' => false, 'message' => 'User not found'], 400);
            }

            $user = User::findOrFail($userId);

            $otpExpiresAt = session('otp_expires_at');
            if ($otpExpiresAt && Carbon::now()->lt($otpExpiresAt)) {
                Log::info('OTP not yet expired');
                return response()->json(['success' => false, 'message' => 'OTP not yet expired'], 400);
            }

            $otp = $this->generateAndSendOtp($user);

            session([
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(5)
            ]);
            $user->update([
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(5)
            ]);


            Log::info('OTP resent successfully');
            return response()->json(['success' => true, 'message' => 'OTP resent successfully']);
        } catch (\Exception $e) {
            Log::error('Error in resendOtp: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to resend OTP: ' . $e->getMessage()], 500);
        }
    }

    private function generateAndSendOtp(User $user)
    {
        $otp = rand(100000, 999999); // Ensure 6 digits

        try {
            Mail::to($user->email)->send(new DynamicMailer(
                'Account Verification',
                'Please use this OTP to verify your account: ' . $otp,
                $otp
            ));
        } catch (\Exception $e) {
            Log::error('Failed to send OTP email: ' . $e->getMessage());
            throw $e; // Re-throw to be caught in the calling method
        }

        return $otp;
    }

    public function otp()
    {
        $otpExpiresAt = session('otp_expires_at');
        $resendAvailable = Carbon::now()->gt($otpExpiresAt);

        return view('verify-otp', [
            'resendAvailable' => $resendAvailable,
            'otpExpiresAt' => $otpExpiresAt
        ]);
    }
}
