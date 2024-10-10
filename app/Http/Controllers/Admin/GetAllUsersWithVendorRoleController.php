<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GetAllUsersWithVendorRoleController extends Controller
{
    public function getUsers()
    {
        $users = User::where('role', 'vendor')->paginate(10);
        return view('admin.admin-vendors', compact('users'));
    }
}
