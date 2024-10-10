<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function admin_dashboard()
    {
        $query = Vehicle::query();

        $totalCar = $query->count(); // Count all cars
        $activeCar = (clone $query)->where('status', true)->count(); // Count active cars
        $inActiveCar = (clone $query)->where('status', false)->count(); // Count inactive cars
        $cars = $query->latest()->paginate(10); // Get paginated latest cars

        // dd($totalCar, $activeCar, $inActiveCar, $cars);
        return view('admin.admin-dashboard', compact('totalCar', 'activeCar', 'inActiveCar', 'cars'));
    }
    public function car_list()
    {
        return view('admin.admin-car-list');
    }
    public function not_found()
    {
        return view('admin.admin-404-error');
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
    public function login()
    {
        return view('admin.admin-authentication-sign-in');
    }
    public function signup()
    {
        return view('admin.admin-authentication-sign-up');
    }
    public function account()
    {
        return view('admin.admin-account-overview');
    }
    public function settings()
    {
        return view('admin.admin-account-settings');
    }
    public function chat()
    {
        return view('admin.admin-chat');
    }
    public function reset_password()
    {
        return view('admin.admin-authentication-reset-password');
    }
    public function new_password()
    {
        return view('admin.admin-authentication-new-password');
    }
    public function all_users()
    {
        return view('admin.admin-users');
    }
    public function categories()
    {
        return view('admin.admin-categories');
    }
    public function add_categories()
    {
        return view('admin.admin-add-category');
    }
}
