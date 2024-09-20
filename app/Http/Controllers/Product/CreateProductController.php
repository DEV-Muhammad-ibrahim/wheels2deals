<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImages;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class CreateProductController extends Controller
{
    public function create_product(Request $request)
    {
        //validation block

        dd($request);
        try {
            //code...
            $validatedData =   $request->validate([
                'name' => 'required|min:3',
                'model' => 'required',
                'comapany' => 'required',
                'price' => 'required',
                'images' => 'required|array|min:3|max:5', // Images array is required and must have at least 3 images and max 5 images
                'images.*' => 'image|mimes:jpeg,png,jpg|max:2048' // Each image must be valid
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
        //Product block
        try {
            $user = auth()->user();

            // Check if user can add products and has the right role
            if ($user->can_add_products && ($user->role === 'admin' || $user->role === 'vendor')) {

                // Create the product
                $product = new Product();
                $product->name = $validatedData['name'];
                $product->model = $validatedData['model'];
                $product->company = $validatedData['company'];
                $product->price = $validatedData['price'];
                $product->user_id = $user->id;

                if ($product->save()) {
                    // Get current date to create the folder for today
                    $dateFolder = Carbon::now()->format('Y-m-d');

                    // Handle multiple image uploads
                    if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $image) {
                            // Store the image in a dated folder within the 'products' directory
                            $imagePath = $image->store("products/{$dateFolder}", 'public');

                            // Save each image path in the ProductImages table
                            ProductImages::create([
                                'path' => $imagePath,
                                'product_id' => $product->id
                            ]);
                        }
                    }

                    return response()->json(['message' => 'Product added successfully', 'product' => $product], 200);
                } else {
                    return response()->json(['error' => 'Failed to save product'], 500);
                }
            } else {
                return response()->json(['error' => "You cannot add products until you are verified or you don't have the right role"], 403);
            }
        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}
