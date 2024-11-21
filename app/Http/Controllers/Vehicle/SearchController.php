<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Type;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Start with a base query of active vehicles
        $query = Vehicle::query()->where('status', true);

        // Search by title (if provided)
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        // Search by specific fields with exact matching
        $exactMatchFields = [
            'company' => 'company_id',
            'type' => 'type_id',
            'model' => 'model_id',
            'year' => 'year',
            'fuel' => 'fuel',
            'transmission' => 'transmission',
            'steering_side' => 'steering_side',
            'cylinders' => 'cylinders',
            'regional_specs' => 'regional_specs',
            'location' => 'location',
        ];

        foreach ($exactMatchFields as $requestKey => $dbColumn) {
            if ($request->filled($requestKey)) {
                $query->where($dbColumn, $request->input($requestKey));
            }
        }

        // Search by multiple companies/types (if provided)
        $multiSelectFields = [
            'companies' => 'company_id',
            'types' => 'type_id',
        ];

        foreach ($multiSelectFields as $requestKey => $dbColumn) {
            if ($request->has($requestKey)) {
                $query->whereIn($dbColumn, $request->input($requestKey));
            }
        }

        // Price range search
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [
                min($request->input('min_price'), $request->input('max_price')),
                max($request->input('min_price'), $request->input('max_price'))
            ]);
        } elseif ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        } elseif ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Mileage range search
        if ($request->filled('min_mileage') && $request->filled('max_mileage')) {
            $query->whereBetween('mileage', [
                min($request->input('min_mileage'), $request->input('max_mileage')),
                max($request->input('min_mileage'), $request->input('max_mileage'))
            ]);
        } elseif ($request->filled('min_mileage')) {
            $query->where('mileage', '>=', $request->input('min_mileage'));
        } elseif ($request->filled('max_mileage')) {
            $query->where('mileage', '<=', $request->input('max_mileage'));
        }

        // Seating capacity search
        if ($request->filled('seating_capacity')) {
            $query->where('seating_capacity', $request->input('seating_capacity'));
        }

        // Additional optional filters
        $optionalFilters = [
            'color' => 'color',
            'interior_color' => 'interior_color',
            'condition' => 'condition',
        ];

        foreach ($optionalFilters as $requestKey => $dbColumn) {
            if ($request->filled($requestKey)) {
                $query->where($dbColumn, $request->input($requestKey));
            }
        }

        // Optional boolean filters
        $booleanFilters = [
            'popular' => 'popular',
            'featured' => 'featured',
        ];

        foreach ($booleanFilters as $requestKey => $dbColumn) {
            if ($request->has($requestKey)) {
                $query->where($dbColumn, $request->input($requestKey));
            }
        }

        // Order and paginate results
        $cars = $query->with(['company', 'type', 'model'])  // Eager load relationships
            ->latest()
            ->paginate(15);

        // Fetch dropdown options
        $companies = Company::all();
        $types = Type::all();
        $models = VehicleModel::all();

        return view('search', compact('cars', 'companies', 'types', 'models'));
    }
}
