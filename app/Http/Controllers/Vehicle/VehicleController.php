<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Feature;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function add_vehicle_page()
    {
        $feature = Feature::all();
        $category = VehicleCategory::all();
        $company = Company::all();
        return view('admin.admin-add-car', compact('feature', 'category', 'company'));
    }
    public function car_list()
    {
        return view('admin.admin-car-list');
    }
    public function car_details()
    {
        return view('admin.admin-car-details');
    }
    public function car_approval()
    {
        return view('admin.admin-car-approvals');
    }
    public function car_approval_details()
    {
        return view('admin.admin-car-approval-details');
    }
}
