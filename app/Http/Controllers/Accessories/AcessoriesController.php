<?php

namespace App\Http\Controllers\Accessories;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\AcessoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AcessoriesController extends Controller
{
    public function create(Request $request)
    {
        // Debugging: Check all request data

        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'price' => 'required|numeric',
            'price_type' => 'required|in:fixed,negotiable',
            'compatibility' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Primary image validation
            'accessory_images.*' => 'image|mimes:jpg,png,jpeg|max:2048', // Additional images validation
        ]);

        // Create a new accessory instance and save it
        $accessory = new Accessory();
        $accessory->name = $request->name;
        $accessory->company = $request->company;
        $accessory->price = $request->price;
        $accessory->compatibility = $request->compatibility;
        $accessory->description = $request->description;
        $accessory->price_type = $request->price_type;

        // Handle the primary image upload
        if ($request->hasFile('image')) {
            $primaryImagePath = $request->file('image')->store('images/preview_accessories', 'public');
            $accessory->image = $primaryImagePath; // Store the path in the database
        }

        // Save the accessory to the database
        $accessory->save();

        // Handle additional accessory images
        if ($request->hasFile('accessory_images')) {
            foreach ($request->file('accessory_images') as $image) {
                if ($image) {
                    $additionalImagePath = $image->store('images/accessories', 'public');

                    // Create a new instance of AccessoryImages and save it
                    AcessoryImage::create([
                        'path' => $additionalImagePath,
                        'accessory_id' => $accessory->id,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Accessory created successfully!');
    }
    public function destroy($id)
    {
        // Find the accessory by ID
        $accessory = Accessory::findOrFail($id);

        // Delete the primary image from storage
        if ($accessory->image && Storage::disk('public')->exists($accessory->image)) {
            Storage::disk('public')->delete($accessory->image);
        }

        // Delete associated accessory images from storage and database
        $accessoryImages = AcessoryImage::where('accessory_id', $accessory->id)->get();

        foreach ($accessoryImages as $image) {
            if ($image->path && Storage::disk('public')->exists($image->path)) {
                Storage::disk('public')->delete($image->path);
            }
            $image->delete(); // Delete the database entry
        }

        // Finally, delete the accessory itself
        $accessory->delete();

        return redirect()->back()->with('success', 'Accessory deleted successfully!');
    }

    public function show()
    {
        $accessories = Accessory::paginate(15);
        return view('admin.admin-acessories', compact('accessories'));
    }
    public function add_acessory_show()
    {
        return view('admin.admin-add-accessories');
    }
    public function accessory_details($id)
    {
        $accessory = Accessory::findOrFail($id);
        return view('acessory', compact('accessory'));
    }
}
