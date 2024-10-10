<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;

class DisableCarsController extends Controller
{
    public function disaproveCar($id)
    {
        try {
            //code...

            $car = Vehicle::findOrFail($id);
            $car->status = false;
            $car->save();
            return redirect()->route('car_list')->with('success', 'Car is inactive');
        } catch (Exception $e) {
            // Log the error for debugging purposes
            // Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}
