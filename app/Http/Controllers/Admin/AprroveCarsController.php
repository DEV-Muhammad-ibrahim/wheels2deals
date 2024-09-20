<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AprroveCarsController extends Controller
{
    public function approveCar(Request $request)
    {
        try {
            //code...
            $id = $request->id;
            $car = Product::where('id', $id)->get();
            $car->status = 'active';
            $car->save();
            return redirect()->back()->with('message', 'Car is active');
        } catch (Exception $e) {
            // Log the error for debugging purposes
            // Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}
