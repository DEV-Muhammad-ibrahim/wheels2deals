<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Company;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleImages;
use App\Models\VehicleType;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {


        $brands = Company::take(10)->get();
        $types = VehicleType::take(10)->get();
        $cars = Vehicle::with(['user', 'images'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $randomCars = Vehicle::with(['user', 'images'])->inRandomOrder()->take(6)->get();


        return view('index', compact('brands', 'types', 'cars', 'randomCars')); // Pass the brands data to the view

    }
    public function error()
    {
        $view = '404';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function about()
    {

        return view('about_us');
    }
    public function blog_author()
    {
        $view = 'blog_author';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function blog_grid()
    {
        $view = 'blog_grid';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function blog_list()
    {
        $view = 'blog_list';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function blog_single()
    {
        $view = 'blog_single';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function coming_soon()
    {
        $view = 'coming_soon';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function compare()
    {
        $view = 'compare';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function contact()
    {
        $view = 'contact';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function create_ads()
    {
        $view = 'create_ads';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function dashboard()
    {
        $view = 'dashboard';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function faq()
    {
        $view = 'faq';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function favourite()
    {
        $view = 'favourite';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function forgot_password()
    {
        $view = 'forgot_password';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function inventory_grid()
    {
        $accessories = Accessory::paginate(10);
        return view('inventory_grid', compact('accessories'));
    }
    public function cars()
    {
        $companies = Company::all();
        $types = VehicleType::all();
        $cars = Vehicle::with(['user', 'images'])->orderBy('id', 'desc')->paginate(10);
        return view('inventory_list', compact('cars', 'companies', 'types'));
    }
    public function inventory_single($id)
    {
        $car = Vehicle::findOrFail($id);
        $user = User::findOrFail($car->user_id);
        $relatedCars = Vehicle::where('type', $car->type)->get();

        return view('inventory_single', compact('car', 'user', 'relatedCars'));
    }
    public function login()
    {
        $user = auth()->user();

        if ($user) {
            return redirect()->route('home');
        } else {
            return view('login');
        }
        // $view = 'login';
        // if (view()->exists($view)) {
        //     return view($view);
        // } else {
        //     return view('404');
        // }
    }
    public function notify()
    {
        $view = 'notify';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function posted_ads()
    {

        $id = auth()->user()->id;

        // Retrieve active vehicles for the authenticated user
        $cars = Vehicle::where(['user_id' => $id, 'status' => 'active'])->paginate(10);

        // Dump and die to see the results

        return view('posted_ads', compact('cars'));
    }
    public function pricing_plan()
    {
        $view = 'pricing_plan';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function privacy()
    {
        $view = 'privacy';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function profile()
    {
        $view = 'profile';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function register()
    {
        $user = auth()->user();
        if ($user) {
            return redirect()->route('home');
        } else {
            return view('register');
        }

        // $view = 'register';
        // if (view()->exists($view)) {
        //     return view($view);
        // } else {
        //     return view('404');
        // }
    }
    public function review()
    {
        $view = 'review';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function setting()
    {
        $view = 'setting';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function vendor_grid()
    {
        $view = 'vendor_grid';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function vendor_list()
    {
        $vendors = User::where(['role' => 'vendor', 'user_can_add_products' => true])->paginate(10);

        return view('vendor_list', compact('vendors'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();

        return redirect()->route('login');
    }
    public function admin_dashboard()
    {
        return view('admin.index');
    }
}
