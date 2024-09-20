<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LoginAllController extends Controller
{
    public function login_all(Request $request)
    {
        // try {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);
        // } catch (ValidationException $e) {
        //     return response()->json(['errors' => $e->errors()], 422);
        // }
        // if ($validation) {

        $credentials = request()->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $role = auth()->user()->role;
            if ($role == 'user') {
                return redirect()->route('index');
            } else if ($role == 'vendor') {
                return redirect()->route('dashboard');
            } else if ($role == 'admin') {
                return redirect()->route('admin_dashboard');
            }
        } else {
            return redirect()->back()->withErrors(['login_error' => 'Invalid Credentials']);
        }
        // } else {
        //     return redirect()->back()->with('error', "Please fill the form ");
        // }
    }
}
