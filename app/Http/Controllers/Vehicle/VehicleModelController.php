<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Type;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function show()
    {
        $models =  VehicleModel::paginate(10);
        $type = Type::all();
        $company = Company::all();
        return view('admin.admin-models', compact('models', 'type', 'company'));
    }
    public function add()
    {
        $company = Company::all();
        $type = Type::all();
        return view('admin.admin-add-model', compact('company', 'type'));
    }
    public function delete($id)
    {
        $model = VehicleModel::findOrFail($id);
        if ($model) {
            $model->delete();
            return back()->with('success', 'Model Deleted');
        }
        return back()->with('error', 'Cannot delete');
    }
    public function create(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Validate name
            'type' => 'required|exists:types,id', // Validate type_id exists in types table
            'company' => 'required|exists:companies,id', // Validate company_id exists in companies table
        ]);

        // Create a new VehicleModel instance and save it to the database
        VehicleModel::create([
            'name' => $validatedData['name'],
            'type_id' => $validatedData['type'], // Use validated input for type_id
            'company_id' => $validatedData['company'], // Use validated input for company_id
        ]);

        // Flash success message to session and redirect back
        return redirect()->back()->with('success', 'Vehicle model created successfully.');
    }
}
