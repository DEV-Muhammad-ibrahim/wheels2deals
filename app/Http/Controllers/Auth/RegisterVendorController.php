<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterVendorController extends Controller
{
    public function register(Request $request)
    {


        $request->validate([
            'profile_image' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            'cover_image' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            'vendor_name' => 'required_if:account_type,dealership|string|max:255',
            'account_type' => 'required|in:dealership,individual',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'phone_no' => 'required|string|max:20',
            'description' => 'required|string',
        ]);

        $id = auth()->user()->id;
        // Find the user by ID
        $user = User::findOrFail($id);

        // Update common attributes
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->phone_no = $request->phone_no;
        $user->description = $request->description;

        // Handle account type specific logic
        if ($request->account_type === 'individual') {
            $user->name = $request->vendor_name; // Save to name instead of vendor_name
        } elseif ($request->account_type === 'dealership') {
            $user->vendor_name = $request->vendor_name; // Save to vendor_name
        }

        // Store website if provided
        $user->website = $request->website; // Save website regardless of account type

        // Set user role based on authentication
        if (auth()->user()->role === 'admin') {
            $user->role = $user->role;
        } else {
            $user->role = 'vendor';
        }

        // Handle profile image upload if provided
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('images/profile_images', 'public');
            $user->profile_picture = $profileImagePath;
        }

        // Handle cover image upload if provided
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('images/cover_images', 'public');
            $user->cover_picture = $coverImagePath;
        }

        // Save the updated user data
        $user->save();

        // Return a response
        return redirect()->back()->with('success', 'Vendor updated successfully!');
    }
    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'The current password field is required.',
            'password.required' => 'The new password field is required.',
            'password.min' => 'The new password must be at least 8 characters.',
            'password.confirmed' => 'The new password confirmation does not match.',
        ]);

        // Manually find the authenticated user
        $user = User::findOrFail(Auth::user()->id);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The provided current password is incorrect.']);
        }

        // Update the user's password manually
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
