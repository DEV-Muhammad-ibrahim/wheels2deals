<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GetAllProductsController extends Controller
{
    public function get_active_products()
    {
        $products = Product::all();
    }
}
