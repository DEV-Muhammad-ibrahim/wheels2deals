<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleApprovalController extends Controller
{
    public function car_details()
    {
        return view('admin.admin-car-approval-details');
    }
    public function  car_approval()
    {
        $cars = Vehicle::where('status', false)->paginate(10);

        return view('admin.admin-car-approvals', compact('cars'));
    }
}
