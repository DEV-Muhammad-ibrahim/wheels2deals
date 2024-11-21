<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Feature;
use App\Models\Type;
use App\Models\Vehicle;
use App\Models\VehicleFeature;
use App\Models\VehicleImages;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateAdController extends Controller
{
    public function create_ads()
    {
        $feature = Feature::all();
        $category = Category::all();
        $company = Company::all();
        $type = Type::all();
        $models = VehicleModel::all();
        return view('create_ads', compact('feature', 'category', 'company', 'type', 'models'));
    }
    public function create_ad(Request $request)
    {
        // Check user role
        $user = Auth::user();
        // dd($user);
        if ($user->role === 'user') {
            return redirect()->route('setting')->with('error', "Please register yourself");
        }
        //Check user_can_add_productss
        if ($user->user_can_add_products === 0) {
            return redirect()->back()->with('error', 'You are not approved by admin to create ads, Please contact at admin@wheels2deals.com');
        }
        // dd($request->all());

        ///Validate all the data
        // dd($request->all());
        $validatedData = $request->validate(
            [

                'title' => 'required|string|max:255',
                'fuel' => 'required|string|in:diesel,electric,petrol',
                'year' => 'required|string|in:1974,1975,1976,1977,1978,1979,1980,1981,1982,1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024',
                'color' => 'required|string|max:50',
                'interior_color' => 'required|string|max:50',
                'seating_capacity' => 'required|string|in:2,4,5,6,7,8,9,10,12,15',
                'transmission' => 'required|string|in:manual,automatic',
                'mileage' => 'required|string|min:0',
                'price' => 'required|string|min:0',
                'price_type' => 'required|string|in:fixed,negotiable',
                'condition' => 'required|string|in:used,new',
                'description' => 'required|string|min:10',
                'location' => 'required|string|in:Abu Dhabi,Ajman,Dubai,Fujairah,Sharjah,Al Ain,Ras al-Khaimah,Umm al-Quwain',
                'steering_side' => 'required|string|in:left,right',
                'cylinders' => 'required|string|in:2,3,4,5,6,8,10,12,16',
                'regional_specs' => 'required|string|in:gcc,american,canadian,european,japanese,korean,chinese,other',
                // Foreign key validations
                'type_id' => 'required|exists:types,id',
                'company_id' => 'required|exists:companies,id',
                // 'category_id' => 'required|exists:categories,id',
                'model_id' => 'required|exists:vehicle_models,id',

                // Status and image validations
                // 'status' => 'required|string|in:active,inactive',
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

                'popular.required' => 'Please specify if the vehicle is popular',
                'featured.required' => 'Please specify if the vehicle is featured',
                'type_id.required' => 'Please select the vehicle type',
                'type_id.exists' => 'Selected vehicle type is invalid',
                'company_id.required' => 'Please select the company',
                'company_id.exists' => 'Selected company is invalid',
                // 'category_id.required' => 'Please select the category',
                'category_id.exists' => 'Selected category is invalid',
                'model_id.required' => 'Please select the model',
                'model_id.exists' => 'Selected model is invalid',
                // 'status.required' => 'Please select the status',
                // 'status.in' => 'Please select a valid status',
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
        // dd('hello');

        DB::beginTransaction();


        try {
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
                'seats' => $validatedData['seating_capacity'],
                'popular' => false,
                'featured' => false,
                'status' => false,
                'user_id' => Auth::user()->id,
                'model_id' => $validatedData['model_id'],
                'type_id' => $validatedData['type_id'],
                'company_id' => $validatedData['company_id'],
                'category_id' => '1',

            ];

            // $validatedData['status'] = false;
            // $validatedData['user_id'] = Auth::user()->id;
            // $validatedData['category_id'] = '1';
            // $validatedData['popular'] = false;
            // $validatedData['featured'] = false;
            // $validatedData['seats'] = $request->seating_capacity;
            // Handle preview image upload
            if ($request->hasFile('p_image')) {
                $previewImagePath = $request->file('p_image')->store('images/vehicle_preview_images', 'public');
                $vehicleData['image'] = $previewImagePath;
            }
            // dd($validatedData);
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
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            Log::error('Validation error: ' . $e->getMessage());
            Log::error('Error creating vehicle: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the vehicle.' .  $e->getMessage());
        }
    }
}
