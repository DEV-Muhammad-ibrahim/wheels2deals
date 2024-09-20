<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        $view = 'index';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
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
        $view = 'inventory_grid';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function inventory_list()
    {
        $view = 'inventory_list';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function inventory_single()
    {
        $view = 'inventory_single';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function login()
    {
        $user = auth()->user();

        if ($user) {
            return view('index');
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
        $view = 'posted_ads';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
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
            return view('index');
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
        $view = 'vendor_list';
        if (view()->exists($view)) {
            return view($view);
        } else {
            return view('404');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    public function admin_dashboard()
    {
        return view('admin.index');
    }
}
