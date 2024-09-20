<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveVenderChangeRoleController extends Controller
{
    public function approveVendor(Request $request)
    {
        try {
            //code...
            $id = $request->id;
            $user = User::where('id', $id)->get();
            $user->role = 'vendor';
            $savedUser = $user->save();
            if ($savedUser) {
                return redirect()->back()->with('message', 'User Can is now vendor and add products');
            } else {
                return redirect()->back()->with('message', 'Something went wrong');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
