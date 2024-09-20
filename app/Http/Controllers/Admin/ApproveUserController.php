<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveUserController extends Controller
{
    public function approveUser(Request $request)
    {
        try {
            //code...
            $user = User::where('id', $request->id)->get();
            $user->user_can_add_products = true;
            $SavedUser = $user->save();
            if ($SavedUser) {
                return redirect()->back()->with('message', 'User is approved and can add products');
            } else {

                return redirect()->back()->with('message', 'User is not approved and cant add products');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
