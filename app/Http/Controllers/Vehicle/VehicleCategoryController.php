<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleCategoryController extends Controller
{
    public function read()
    {
        $category = VehicleCategory::all();
        return view('admin.admin-categories', compact('category'));
    }
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:vehicle_categories',
            'image' => 'required'
        ]);

        $imagePath = $request->file('image')->store('category_images', 'public');
        $category = new VehicleCategory();
        $category->name = $request->name;
        $category->image = $imagePath;

        if ($category->save()) {
            return redirect()->back()->with('success', 'Category Created');
        }
        redirect()->back()->with('error', "Cannot Create Category");
    }
    public function update(Request $request, $id)
    {
        $category = VehicleCategory::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:vehicle_categories',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update category name
        $category->name = $request->name;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($category->image) {
                // Attempt to delete the old image
                if (Storage::disk('public')->exists($category->image)) {
                    Storage::disk('public')->delete($category->image);
                } else {
                    response()->json(['message', 'something went wrong']);
                }
            }

            // Store new image
            $path = $request->file('image')->store('category_images', 'public');
            $category->image = $path;
        }

        $category->save();

        return redirect()->route('categories')->with('success', 'Category updated successfully.');
    }
    public function show($id)
    {
        $category = VehicleCategory::findOrFail($id);
        return view('admin.admin-edit-category', compact('category'));
    }

    public function destroy($id)
    {
        $category = VehicleCategory::findOrFail($id);

        // Delete the image file from storage
        if ($category->image) {
            if (Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            } else {
                response()->json(['message', 'something went wrong']);
            }
        }

        // Delete the category
        $category->delete();

        return redirect()->route('categories')->with('success', 'Category deleted successfully.');
    }
}
