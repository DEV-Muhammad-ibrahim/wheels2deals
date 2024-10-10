<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowDetailsController extends Controller
{
    public function details($id)
    {
        $user = User::findOrFail($id);
        // dd($user->description);
        return view('vendor-details', compact('user'));
    }
}
