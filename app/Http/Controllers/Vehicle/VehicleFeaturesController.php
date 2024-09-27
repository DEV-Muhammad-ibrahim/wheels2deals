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
    public function update(Request $request)
    {
        $request->validate(
            [
                'id' => 'required',
                'name' => 'required|max:255|unique:features'
            ]
        );
        $feature = Feature::where('id', $request->id)->update(['name' => $request->name]);
        if ($feature) {
            return redirect()->back()->with('success', 'Feature Updated');
        }
        return redirect()->back()->with('error', 'Cannot Update Feature');
    }
}
