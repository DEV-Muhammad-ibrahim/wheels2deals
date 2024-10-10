<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public  function details($id)
    {
        // if (Auth::user()->role === 'admin') {

        $user = User::findOrFail($id);
        return view('admin.admin-vendor-details', compact('user'));
        // }

    }
}
