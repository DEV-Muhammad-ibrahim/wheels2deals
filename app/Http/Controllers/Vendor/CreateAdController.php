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
                'year' => 'required|string|max:4',
                'color' => 'required|string|max:255',
                'interior_color' => 'required|string|max:255',
                'seating_capacity' => 'required',
                'transmission' => 'required|in:manual,automatic',
                'mileage' => 'required|numeric',
                'price' => 'required|numeric',
                'price_type' => 'required|string|in:fixed,negotiable',
                'condition' => 'required|string|in:used,new',
                'description' => 'required|string',
                'p_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'image.*' => 'required|mimes:jpeg,png,jpg|max:2048|image',
                'image' => 'array|max:5',
                'feature_ids' => 'array',
                'type_id' => 'required',
                'company_id' => 'required',
                'model_id' => 'required',
            ],
            [
                // Custom messages for required fields
                'type_id.required' => 'The vehicle type is required.',
                'company_id.required' => 'The company is required.',
                'model_id.required' => 'The model is required.',
                "p_image.required" => "A preview image is required.",
                "p_image.image" => "The preview image must be an image.",
                "p_image.mimes" => "The preview image must be a file of type: jpeg, png, jpg.",
                "p_image.max" => "The preview image must not be greater than 2 MB.",
                "image.*.required" => "Each gallery image is required.",
                "image.*.image" => "Each gallery image must be an image.",
                "image.*.mimes" => "Each gallery image must be a file of type: jpeg, png, jpg.",

                // Custom messages for other fields
                "image.array" => "Images must be an array.",
                "image.max" => "You can upload a maximum of 5 images.",

            ]
        );

        DB::beginTransaction();


        try {

            $validatedData['status'] = false;
            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['category_id'] = '1';
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
}
