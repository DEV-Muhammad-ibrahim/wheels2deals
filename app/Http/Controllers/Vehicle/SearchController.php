<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Type;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $query = Vehicle::query()->where('status', true);

        // Search by title
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        //Search by company
        if ($request->filled('company')) {
            $companyId = $request->input('company');
            $query->where('company_id', $companyId);
        }

        // Search by type
        if ($request->filled('type')) {
            $query->where('type_id', $request->input('type'));
        }

        // Search by Model
        if ($request->filled('model')) {
            $query->where('model_id', $request->input('model'));
        }
        // dd($request->input('company'), $request->input('type'), $request->input('model'));

        // Search by company
        if ($request->has('companies')) {
            $query->whereIn('company_id', $request->input('companies'));
        }

        // Search by type
        if ($request->has('types')) {
            $query->whereIn('type_id', $request->input('types'));
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
        $types = Type::all();
        $models = VehicleModel::all();
        return view('search', compact('cars', 'companies', 'types', 'models'));
    }
}
