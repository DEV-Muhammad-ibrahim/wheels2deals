<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleTypeController extends Controller
{
    public function read()
    {
        $type = Type::all();
        return view('admin.admin-types', compact('type'));
    }
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:companies',
            'image' => 'required'
        ]);

        $imagePath = $request->file('image')->store('images/type_images', 'public');
        $type = new Type();
        $type->name = $request->name;
        $type->image = $imagePath;

        if ($type->save()) {
            return redirect()->back()->with('success', 'type Created');
        }
        redirect()->back()->with('error', "Cannot Create type");
    }
    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update category name
        $type->name = $request->name;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($type->image) {
                // Attempt to delete the old image
                if (Storage::disk('public')->exists($type->image)) {
                    Storage::disk('public')->delete($type->image);
                } else {
                    response()->json(['message', 'something went wrong']);
                }
            }

            // Store new image
            $path = $request->file('image')->store('images/type_images', 'public');
            $type->image = $path;
        }

        $type->save();

        return redirect()->route('type')->with('success', 'type updated successfully.');
    }
    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.admin-edit-type', compact('type'));
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);

        // Delete the image file from storage
        if ($type->image) {
            if (Storage::disk('public')->exists($type->image)) {
                Storage::disk('public')->delete($type->image);
            } else {
                response()->json(['message', 'something went wrong']);
            }
        }

        // Delete the type
        $type->delete();

        return redirect()->route('type')->with('success', 'type deleted successfully.');
    }
    public function add_type()
    {
        return view('admin.admin-add-type');
    }
}
