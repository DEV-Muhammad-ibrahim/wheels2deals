<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DisableUserController extends Controller
{
    public function disableUser(Request $request)
    {

        try {
            //code...
            $user = User::where('id', $request->id)->get();
            $user->user_can_add_products = false;
            $SavedUser = $user->save();
            if ($SavedUser) {
                return redirect()->back()->with('message', 'User is not approved and cant add products');
            } else {
                return redirect()->back()->with('message', 'User is approved and can add products');
            }
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
    }
}
