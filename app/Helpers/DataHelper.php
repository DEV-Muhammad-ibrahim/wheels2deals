<?php

use App\Models\Company;
use App\Models\VehicleType;

if (!function_exists('getAllCompanies')) {
    function getAllCompanies()
    {
        return Company::all();
    }
}

if (!function_exists('getAllTypes')) {
    function getAllTypes()
    {
        return VehicleType::all();
    }
}
