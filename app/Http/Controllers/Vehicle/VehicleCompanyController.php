<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleCompanyController extends Controller
{
    public function read()
    {
        $company = Company::all();
        return view('admin.admin-company', compact('company'));
    }
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:companies',
            'image' => 'required'
        ]);

        $imagePath = $request->file('image')->store('images/company_images', 'public');
        $company = new Company();
        $company->name = $request->name;
        $company->image = $imagePath;

        if ($company->save()) {
            return redirect()->back()->with('success', 'company Created');
        }
        redirect()->back()->with('error', "Cannot Create company");
    }
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:vehicle_categories',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update category name
        $company->name = $request->name;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($company->image) {
                // Attempt to delete the old image
                if (Storage::disk('public')->exists($company->image)) {
                    Storage::disk('public')->delete($company->image);
                } else {
                    response()->json(['message', 'something went wrong']);
                }
            }

            // Store new image
            $path = $request->file('image')->store('images/company_images', 'public');
            $company->image = $path;
        }

        $company->save();

        return redirect()->route('company')->with('success', 'Company updated successfully.');
    }
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('admin.admin-edit-company', compact('company'));
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        // Delete the image file from storage
        if ($company->image) {
            if (Storage::disk('public')->exists($company->image)) {
                Storage::disk('public')->delete($company->image);
            } else {
                response()->json(['message', 'something went wrong']);
            }
        }

        // Delete the company
        $company->delete();

        return redirect()->route('company')->with('success', 'company deleted successfully.');
    }
    public function add_company()
    {
        return view('admin.admin-add-company');
    }
}
