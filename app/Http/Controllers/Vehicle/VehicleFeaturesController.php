<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class VehicleFeaturesController extends Controller
{


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:features'
        ]);

        $feature = Feature::create(
            ['name' => $request->name]
        );


        if ($feature) {
            return redirect()->back()->with('success', 'Feature Created');
        }
        return redirect()->back()->with('error', 'Something went wrong');
    }
    public function delete($id)
    {
        $feature = Feature::findOrFail($id);
        if ($feature->delete()) {
            return redirect()->back()->with('success', "Feature Deleted");
        }
        return redirect()->back()->with('error', "Something went wrong");
    }
    public function show()
    {
        $feature = Feature::all();

        return view('admin.admin-feature', compact('feature'));
    }
    public function add_feature()
    {
        return view('admin.admin-add-feature');
    }
}
