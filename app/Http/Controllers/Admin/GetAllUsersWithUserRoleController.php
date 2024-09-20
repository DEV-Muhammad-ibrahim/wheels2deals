<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GetAllUsersWithUserRoleController extends Controller
{
    public function getUsers()
    {
        $users = User::where('role', 'user')->get();
    }
}
