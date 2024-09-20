<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class DisableCarsController extends Controller
{
    public function disableCar(Request $request)
    {
        try {
            //code...
            $id = $request->id;
            $car = Product::where('id', $id)->get();
            $car->status = 'inactive';
            $car->save();
            return redirect()->back()->with('message', 'Car is inactive');
        } catch (Exception $e) {
            // Log the error for debugging purposes
            // Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}
