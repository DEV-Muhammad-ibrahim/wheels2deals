<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GetInActiveCarsController extends Controller
{
    public function getCars()
    {
        $cars = Product::where('status', 'inactive')->where('type', 'cars')->get();
    }
}
