<?php

namespace App\Http\Controllers\Vendor;

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

class CreateAdController extends Controller
{
    public function create_ads()
    {
        $feature = Feature::all();
        $category = VehicleCategory::all();
        $company = Company::all();
        $type = VehicleType::all();
        return view('create_ads', compact('feature', 'category', 'company', 'type'));
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
                'preview_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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
        // dd($validatedData);

        DB::beginTransaction();


        try {

            $validatedData['status'] = false;
            $validatedData['user_id'] = $user->id;
            // Handle preview image upload
            if ($request->hasFile('preview_image')) {
                $previewImagePath = $request->file('preview_image')->store('images/vehicle_preview_images', 'public');
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

            return redirect()->back()->with('success', 'Ad created successfully. Admin will Approve the ad');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating vehicle: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the vehicle.' .  $e->getMessage());
        }
    }
}
