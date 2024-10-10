<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // dd($request->all());
        $query = Vehicle::query();

        // Search by title
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        //Search by company
        if ($request->filled('company')) {
            $query->where('company', 'like', '%' . $request->input('company') . '%');
        }
        //Search By type
        if ($request->filled('type')) {
            $query->where('type', 'like', '%' . $request->input('type') . '%');
        }
        // Search by company
        if ($request->has('companies')) {
            $query->whereIn('company', $request->input('companies'));
        }

        // Search by type
        if ($request->has('types')) {
            $query->whereIn('type', $request->input('types'));
        }
        // Search by price range
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        } elseif ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        } elseif ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Order by latest
        $cars = $query->latest()->paginate(15);

        // dd($cars);
        // Fetch unique companies and types for checkboxes
        $companies = Company::all();
        $types = VehicleType::all();
        return view('search', compact('cars', 'companies', 'types'));
    }
}
