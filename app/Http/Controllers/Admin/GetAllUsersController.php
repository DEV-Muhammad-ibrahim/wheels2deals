<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetAllUsersController extends Controller
{
    public function getUsers()
    {
        $users = User::where('role', 'user')->paginate(10);
        return view('admin.admin-users', compact('users'));
    }
    public function deleteUser($id)
    {
        $role = Auth::user()->role;
        // dd($role);
        if ($role === 'admin') {
            User::findOrFail($id)->delete();
            return redirect()->back()->with('success', "User Deleted");
        } else {

            return redirect()->route('home');
        }
    }
    public function user_details($id)
    {
        $user = User::findOrFail($id);
        return view('admin.admin-user-details', compact('user'));
    }
}
