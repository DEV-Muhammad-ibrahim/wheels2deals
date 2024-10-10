<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AprroveCarsController extends Controller
{
    public function approveCar($id)
    {
        try {
            //code...

            $car = Vehicle::findOrFail($id);
            $car->status = true;
            $car->save();
            return redirect()->route('car_approval')->with('success', 'Car is active');
        } catch (Exception $e) {
            // Log the error for debugging purposes
            // Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
    public function approve_car_details_page($id)
    {
        $car = Vehicle::findOrFail($id);
        $user = User::findOrFail($car->user_id);
        // dd($car->images);
        return view('admin.car-approval-details', compact('car', 'user'));
    }
}
