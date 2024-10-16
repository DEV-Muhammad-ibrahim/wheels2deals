<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Feature;
use App\Models\Vehicle;
use App\Models\VehicleCategory;
use App\Models\VehicleFeature;
use App\Models\VehicleImages;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{

    // Add Vehicle Page
    public function add_vehicle_page()
    {
        $feature = Feature::all();
        $category = VehicleCategory::all();
        $company = Company::all();
        $type = VehicleType::all();
        return view('admin.admin-add-car', compact('feature', 'category', 'company', 'type'));
    }
    // Create Car
    public function add_car(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate(
            [
                'title' => 'required|string|max:255',
                'vehicle_registration_no' => 'required|string|max:10|regex:/^[A-Z]{1,2}\s?\d{1,5}$/',
                'registration_plate_no' => 'required|string|max:10|regex:/^[A-Z]{1,2}\s?\d{1,5}$/',
                'doi' => 'required|date',
                'doe' => 'required|date',
                'category' => 'required|string|max:255|exists:vehicle_categories,name',
                'company' => 'required|string|max:255|exists:companies,name',
                'fuel' => 'required|string|in:diesel,electric,petrol',
                'year' => 'required|string|max:4',
                'color' => 'required|string|max:255',
                'mileage' => 'required|numeric',
                'price' => 'required|numeric',
                'price_type' => 'required|string|in:fixed,negotiable',
                'type' => 'required|string|exists:vehicle_types,name',
                'condition' => 'required|string|in:used,new',
                'description' => 'required|string',
                'status' => 'required|string|in:active,inactive',
                'p_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'image.*' => 'required|mimes:jpeg,png,jpg|max:2048|image',
                'feature_ids' => 'array',
            ],
            [
                // Custom messages for doi and doe
                'doi.required' => 'The Date of Issue field is required.',
                'doi.date' => 'The Date of Issue must be a valid date.',

                // Custom message for doe
                'doe.required' => 'The Date of Expiry field is required.',
                'doe.date' => 'The Date of Expiry must be a valid date.',

                // Custom messages for vehicle_registration_no and registration_plate_no
                'vehicle_registration_no.required' => 'The Vehicle Registration Number field is required.',
                'vehicle_registration_no.string' => 'The Vehicle Registration Number must be a string.',
                'vehicle_registration_no.regex' => 'The Vehicle Registration Number format is invalid. It should follow the format "AB 1234" or "AB1234".',
                'vehicle_registration_no.max' => 'The Vehicle Registration Number may not be greater than 10 characters.',

                'registration_plate_no.required' => 'The Registration Plate Number field is required.',
                'registration_plate_no.string' => 'The Registration Plate Number must be a string.',
                'registration_plate_no.regex' => 'The Registration Plate Number format is invalid. It should follow the format "AB 1234" or "AB1234".',
                'registration_plate_no.max' => 'The Registration Plate Number may not be greater than 10 characters.',
            ]
        );

        DB::beginTransaction();


        try {

            $validatedData['status'] = ($validatedData['status'] === 'active');
            $validatedData['user_id'] = Auth::user()->id;
            // dd($validatedData['user_id']);
            // Handle preview image upload
            if ($request->hasFile('p_image')) {
                $previewImagePath = $request->file('p_image')->store('images/vehicle_preview_images', 'public');
                $validatedData['image'] = $previewImagePath;
            }
            // dd($validatedData);
            $vehicle = Vehicle::create($validatedData);

            // Handle gallery images upload
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $imagePath = $image->store('images/vehicle_images', 'public');
                    VehicleImages::create([
                        'vehicle_id' => $vehicle->id,
                        'path' => $imagePath,
                    ]);
                }
            }

            // Handle features
            if ($request->has('feature_ids')) {
                foreach ($request->feature_ids as $featureId) {
                    VehicleFeature::create([
                        'vehicle_id' => $vehicle->id,
                        'feature_id' => $featureId,
                        'name' => Feature::find($featureId)->name,
                    ]);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Vehicle created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating vehicle: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the vehicle.' .  $e->getMessage());
        }
    }

    public function car_list()
    {
        $cars = Vehicle::where('status', true)->paginate(10);
        return view('admin.admin-car-list', compact('cars'));
    }

    // Delete Car
    public function deleteVehicle($id)
    {
        DB::beginTransaction();

        try {
            // Find the vehicle
            $vehicle = Vehicle::findOrFail($id);

            // Delete preview image from storage
            if ($vehicle->image) {
                Storage::disk('public')->delete($vehicle->image);
            }

            // Delete gallery images from storage
            $vehicleImages = VehicleImages::where('vehicle_id', $vehicle->id)->get();
            foreach ($vehicleImages as $vehicleImage) {
                Storage::disk('public')->delete($vehicleImage->path);
                $vehicleImage->delete(); // Delete the image record from the database
            }

            // Delete features associated with the vehicle
            VehicleFeature::where('vehicle_id', $vehicle->id)->delete();

            // Finally, delete the vehicle itself
            $vehicle->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Vehicle deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting vehicle: ' . $e->getMessage());

            return back()->with('error', 'An error occurred while deleting the vehicle. ' . $e->getMessage());
        }
    }
    // Car details page
    public function car_details($id)
    {

        $car = Vehicle::findOrFail($id);

        return view('admin.admin-car-details', compact('car'));
    }

    // Car Approval
    public function edit_page($id)
    {
        $car = Vehicle::findOrfail($id);
        return view('admin.admin-edit-vehicle', compact('car'));
    }
}
