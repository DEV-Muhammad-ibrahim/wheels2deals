<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterVendorController extends Controller
{
    public function register(Request $request)
    {
        // $data = [$request->profile_image, $request->cover_image, $request->vendor_name, $request->account_type, $request->city, $request->state, $request->zip, $request->description];

        $request->validate([
            'profile_image' => '|required|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            'cover_image' => '|required|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            'vendor_name' => 'required|string|max:255',
            'account_type' => 'required|in:dealership,individual',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'phone_no' => 'required|string|max:20',
            'description' => 'required|string',
        ]);
        $id = auth()->user()->id;
        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user's attributes
        $user->vendor_name = $request->vendor_name;
        $user->account_type = $request->account_type;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->phone_no = $request->phone_no;
        $user->website = $request->website;
        $user->description = $request->description;
        $user->role = 'vendor';

        // Handle profile image upload if provided
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_picture = $profileImagePath;
        }

        // Handle cover image upload if provided
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('cover_images', 'public');
            $user->cover_picture = $coverImagePath;
        }

        // Save the updated user data
        $user->save();

        // Return a response
        return redirect()->back()->with('success', 'Vendor updated successfully!');
        // dd($data);
    }
}
