<?php



use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginAllController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisterVendorController;
use App\Http\Controllers\Product\CreateProductController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\ViewController;

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
// Route::get('/dashboard', function () {
//     // ...
// });
// Route::get('/profile', function () {
//     // ...
// });
Route::get('/', [ViewController::class, 'index'])->name('index');
// });

Route::get('/404', [ViewController::class, 'error'])->name('404');
Route::get('/about', [ViewController::class, 'about'])->name('about');
Route::get('/blog_author', [ViewController::class, 'blog_author'])->name('blog_author');
Route::get('/blog_grid', [ViewController::class, 'blog_grid'])->name('blog_grid');
Route::get('/blog_list', [ViewController::class, 'blog_list'])->name('blog_list');
Route::get('/blog_single', [ViewController::class, 'blog_single'])->name('blog_single');
Route::get('/coming_soon', [ViewController::class, 'coming_soon'])->name('coming_soon');
Route::get('/compare', [ViewController::class, 'compare'])->name('compare');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/create_ads', [ViewController::class, 'create_ads'])->name('create_ads');
Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [ViewController::class, 'faq'])->name('faq');
Route::get('/favourite', [ViewController::class, 'favourite'])->name('favourite');
Route::get('/forgot_password', [ViewController::class, 'forgot_password'])->name('forgot_password');
Route::get('/inventory_grid', [ViewController::class, 'inventory_grid'])->name('inventory_grid');
Route::get('/inventory_list', [ViewController::class, 'inventory_list'])->name('inventory_list');
Route::get('/inventory_single', [ViewController::class, 'inventory_single'])->name('inventory_single');
Route::get('/notify', [ViewController::class, 'notify'])->name('notify');
Route::get('/posted_ads', [ViewController::class, 'posted_ads'])->name('posted_ads');
Route::get('/pricing_plan', [ViewController::class, 'pricing_plan'])->name('pricing_plan');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/privacy', [ViewController::class, 'privacy'])->name('privacy');
Route::get('/profile', [ViewController::class, 'profile'])->name('profile');

Route::get('/review', [ViewController::class, 'review'])->name('review');
Route::get('/vendor_grid', [ViewController::class, 'vendor_grid'])->name('vendor_grid');
Route::get('/vendor_list', [ViewController::class, 'vendor_list'])->name('vendor_list');
Route::get('/logout', [ViewController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/404', [AdminViewController::class, 'not_found'])->name('admin_404');
    Route::get('/dashboard', [AdminViewController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/cars', [AdminViewController::class, 'car_list'])->name('car_list');
    Route::get('/car/details', [AdminViewController::class, 'car_details'])->name('car_details');
    Route::get('/car/approval', [AdminViewController::class, 'car_approval'])->name('car_approval');
    Route::get('/car/approval/details', [AdminViewController::class, 'car_approval_details'])->name('car_approval_details');
    Route::get('/login', [AdminViewController::class, 'login'])->name('admin_login');
    Route::get('/signup', [AdminViewController::class, 'signup'])->name('admin_signup');
    Route::get('/account', [AdminViewController::class, 'account'])->name('admin_account');
    Route::get('/chat', [AdminViewController::class, 'chat'])->name('admin_chat');
    Route::get('/reset-password', [AdminViewController::class, 'reset_password'])->name('admin_reset_password');
    Route::get('/new-password', [AdminViewController::class, 'new_password'])->name('admin_new_password');
    Route::get('/settings', [AdminViewController::class, 'settings'])->name('admin_settings');
    Route::get('/users', [AdminViewController::class, 'all_users'])->name('all_users');
});


Route::get('/register', [ViewController::class, 'register'])->name('register');

/// Otp routes
Route::post('/verify-otp', [OtpController::class, 'verifyOtp'])->name('verify_otp');
Route::post('/resend-otp', [OtpController::class, 'resendOtp'])->name('resend-otp');
Route::middleware('otp.verify')->group(function () {
    Route::get('verify-otp', [OtpController::class, 'otp'])->name('verify_otp_page');
});


Route::get('/setting', [ViewController::class, 'setting'])->name('setting');
Route::get('/users', [AuthController::class, 'users']);
Route::post('/vendor', [RegisterVendorController::class, 'register'])->name('register_vendor');
Route::post('/login', [LoginAllController::class, 'login_all'])->name('login_all');
Route::post('/register', [RegisterUserController::class, 'register'])->name('register_user');
Route::post('/create_ad', [CreateProductController::class, 'create_product'])->name('ad_create');
Route::fallback(function () {
    return redirect('/404');
});
