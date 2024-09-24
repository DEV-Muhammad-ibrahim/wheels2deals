<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function delete(Request $request)
    {
        $productId = $request->id;
        $product = Product::findOrFail($productId);

        foreach ($product->images as $images) {
            $filePath = public_path($images->path);
            unlink($filePath);
        }
        $product->delete();
    }
}
