<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;


class AuthController extends Controller
{
    public function users()
    {
        $users = User::where('role', 'user')->get();

        return response()->json($users);
    }
}
