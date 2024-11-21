<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Feature;
use App\Models\Type;
use App\Models\Vehicle;
use App\Models\VehicleCategory;
use App\Models\VehicleFeature;
use App\Models\VehicleImages;
use App\Models\VehicleModel;
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
        $category = Category::all();
        $company = Company::all();
        $type = Type::all();
        $models = VehicleModel::all();
        return view('admin.admin-add-car', compact('feature', 'category', 'company', 'type', 'models'));
    }
    // Create Car
    public function add_car(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate(
            [
                'title' => 'required|string|max:255',
                'fuel' => 'required|string|in:diesel,electric,petrol',
                'year' => 'required|string|in:1974,1975,1976,1977,1978,1979,1980,1981,1982,1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024',
                'color' => 'required|string|max:50',
                'interior_color' => 'required|string|max:50',
                'seating_capacity' => 'required|integer|in:2,4,5,6,7,8,9,10,12,15',
                'transmission' => 'required|string|in:manual,automatic',
                'mileage' => 'required|integer|min:0',
                'price' => 'required|numeric|min:0',
                'price_type' => 'required|string|in:fixed,negotiable',
                'condition' => 'required|string|in:used,new',
                'description' => 'required|string|min:10',
                'location' => 'required|string|in:Abu Dhabi,Ajman,Dubai,Fujairah,Sharjah,Al Ain,Ras al-Khaimah,Umm al-Quwain',
                'steering_side' => 'required|string|in:left,right',
                'cylinders' => 'required|string|in:2,3,4,5,6,8,10,12,16',
                'regional_specs' => 'required|string|in:gcc,american,canadian,european,japanese,korean,chinese,other',
                'seats' => 'required|string|in:1,2,3,4,5,6,7,8,9',
                'popular' => 'required|boolean',
                'featured' => 'required|boolean',

                // Foreign key validations
                'type_id' => 'required|exists:types,id',
                'company_id' => 'required|exists:companies,id',
                'category_id' => 'required|exists:categories,id',
                'model_id' => 'required|exists:vehicle_models,id',

                // Status and image validations
                'status' => 'required|string|in:active,inactive',
                'p_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'image' => 'required|array|min:1|max:5',
                'image.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                // Optional features
                'feature_ids' => 'nullable|array',
                'feature_ids.*' => 'exists:features,id'
            ],
            [
                // Custom error messages
                'title.required' => 'Please enter the vehicle title',
                'fuel.required' => 'Please select the fuel type',
                'fuel.in' => 'Please select a valid fuel type',
                'year.required' => 'Please select the manufacturing year',
                'year.in' => 'Please select a valid year',
                'color.required' => 'Please enter the exterior color',
                'interior_color.required' => 'Please enter the interior color',
                'seating_capacity.required' => 'Please select the seating capacity',
                'seating_capacity.in' => 'Please select a valid seating capacity',
                'transmission.required' => 'Please select the transmission type',
                'transmission.in' => 'Please select a valid transmission type',
                'mileage.required' => 'Please enter the mileage',
                'mileage.integer' => 'Mileage must be a whole number',
                'mileage.min' => 'Mileage cannot be negative',
                'price.required' => 'Please enter the price',
                'price.numeric' => 'Price must be a number',
                'price.min' => 'Price cannot be negative',
                'price_type.required' => 'Please select the price type',
                'price_type.in' => 'Please select a valid price type',
                'condition.required' => 'Please select the vehicle condition',
                'condition.in' => 'Please select a valid condition',
                'description.required' => 'Please provide a description',
                'description.min' => 'Description must be at least 10 characters',
                'location.required' => 'Please select the location',
                'location.in' => 'Please select a valid location',
                'steering_side.required' => 'Please select the steering side',
                'steering_side.in' => 'Please select a valid steering side',
                'cylinders.required' => 'Please select the number of cylinders',
                'cylinders.in' => 'Please select a valid number of cylinders',
                'regional_specs.required' => 'Please select the regional specifications',
                'regional_specs.in' => 'Please select valid regional specifications',
                'seats.required' => 'Please select the number of seats',
                'seats.in' => 'Please select a valid number of seats',
                'popular.required' => 'Please specify if the vehicle is popular',
                'featured.required' => 'Please specify if the vehicle is featured',
                'type_id.required' => 'Please select the vehicle type',
                'type_id.exists' => 'Selected vehicle type is invalid',
                'company_id.required' => 'Please select the company',
                'company_id.exists' => 'Selected company is invalid',
                'category_id.required' => 'Please select the category',
                'category_id.exists' => 'Selected category is invalid',
                'model_id.required' => 'Please select the model',
                'model_id.exists' => 'Selected model is invalid',
                'status.required' => 'Please select the status',
                'status.in' => 'Please select a valid status',
                'p_image.required' => 'Please upload a preview image',
                'p_image.image' => 'Preview image must be an image file',
                'p_image.mimes' => 'Preview image must be a jpeg, png, or jpg file',
                'p_image.max' => 'Preview image must not be larger than 2MB',
                'image.required' => 'Please upload at least one gallery image',
                'image.array' => 'Gallery images must be provided as an array',
                'image.max' => 'You can upload maximum 5 gallery images',
                'image.*.image' => 'All gallery files must be images',
                'image.*.mimes' => 'Gallery images must be jpeg, png, or jpg files',
                'image.*.max' => 'Gallery images must not be larger than 2MB',
                'feature_ids.array' => 'Features must be provided as an array',
                'feature_ids.*.exists' => 'One or more selected features are invalid'
            ]
        );

        DB::beginTransaction();

        try {
            // Prepare the vehicle data according to the schema
            $vehicleData = [
                'title' => $validatedData['title'],
                'fuel' => $validatedData['fuel'],
                'year' => $validatedData['year'],
                'color' => $validatedData['color'],
                'interior_color' => $validatedData['interior_color'],
                'seating_capacity' => $validatedData['seating_capacity'],
                'transmission' => $validatedData['transmission'],
                'mileage' => $validatedData['mileage'],
                'price' => $validatedData['price'],
                'price_type' => $validatedData['price_type'],
                'condition' => $validatedData['condition'],
                'description' => $validatedData['description'],
                'location' => $validatedData['location'],
                'steering_side' => $validatedData['steering_side'],
                'cylinders' => $validatedData['cylinders'],
                'regional_specs' => $validatedData['regional_specs'],
                'seats' => $validatedData['seats'],
                'popular' => $validatedData['popular'],
                'featured' => $validatedData['featured'],
                'status' => $validatedData['status'] === 'active',
                'user_id' => Auth::user()->id,
                'model_id' => $validatedData['model_id'],
                'type_id' => $validatedData['type_id'],
                'company_id' => $validatedData['company_id'],
                'category_id' => $validatedData['category_id'],
            ];

            // Handle preview image upload
            if ($request->hasFile('p_image')) {
                $previewImagePath = $request->file('p_image')->store('images/vehicle_preview_images', 'public');
                $vehicleData['image'] = $previewImagePath;
            }

            // Create the vehicle record
            $vehicle = Vehicle::create($vehicleData);

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
                $features = Feature::whereIn('id', $request->feature_ids)->get();
                foreach ($features as $feature) {
                    VehicleFeature::create([
                        'vehicle_id' => $vehicle->id,
                        'feature_id' => $feature->id,
                        'name' => $feature->name,
                    ]);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Vehicle created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating vehicle: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the vehicle. ' . $e->getMessage());
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
