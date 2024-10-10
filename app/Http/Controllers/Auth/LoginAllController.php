<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Carbon\Carbon;

class LoginAllController extends Controller
{
    public function login_all(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {

            $user = Auth::user();
            if (!$user->verified) {
                $otp = $this->generateAndSendOtp($user);
                $expiresAt = Carbon::now()->addMinutes(5);
                $currentUser = User::findOrFail($user->id);
                $currentUser->update([
                    'otp' => $otp,
                    'otp_expires_at' => $expiresAt,
                ]);
                session([
                    'user_id' => $user->id,
                    'otp' => $otp,
                    'otp_expires_at' => $expiresAt,
                ]);
                return redirect()->route('verify_otp_page')->with('success', "Please verify your account");
            }
            session(['otp_verified' => true]);
            $role = $user->role;
            if ($role == 'user') {
                return redirect()->route('home');
            } else if ($role == 'vendor') {
                return redirect()->route('profile');
            } else if ($role == 'admin') {
                return redirect()->route('admin_dashboard');
            }
        } else {
            return redirect()->back()->withErrors(['login_error' => 'Invalid Credentials']);
        }
    }
    private function generateAndSendOtp(User $user)
    {
        $otp = rand(1000000, 999999);
        Mail::to($user->email)->send(new DynamicMailer(
            'Account Verification',
            'Please use this OTP to verify your account.',
            $otp,
        ));
        return $otp;
    }
}
