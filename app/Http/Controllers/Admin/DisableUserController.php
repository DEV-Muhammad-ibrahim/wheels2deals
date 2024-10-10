<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DisableUserController extends Controller
{
    public function disableUser($id)
    {

        try {
            //code...
            $user = User::findOrFail($id);
            $user->user_can_add_products = false;
            $SavedUser = $user->save();
            if ($SavedUser) {
                return redirect()->back()->with('success', $user->vendor_name . 'is not approved and cant add products');
            } else {
                return redirect()->back()->with('error', 'User is approved and can add products');
            }
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
    }
}
