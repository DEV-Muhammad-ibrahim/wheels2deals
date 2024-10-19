<?php

use App\Models\Company;
use App\Models\Type;
use App\Models\VehicleModel;
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
        return Type::all();
    }
}
if (!function_exists('getAllModels')) {
    function getAllModels()
    {
        return VehicleModel::with(['company', 'type'])->get();
    }
}
