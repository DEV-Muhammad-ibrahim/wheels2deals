<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveVenderChangeRoleController extends Controller
{
    public function approveVendor($id)
    {
        try {
            //code...

            $user = User::findOrFail($id);
            $user->user_can_add_products = true;
            $savedUser = $user->save();
            if ($savedUser) {
                return redirect()->back()->with('success', $user->vendor_name . 'is now vendor and create products');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('message', 'Something went wrong' . $th->getMessage());
        }
    }
}
