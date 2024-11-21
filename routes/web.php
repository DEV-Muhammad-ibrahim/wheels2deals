<?php

use App\Http\Controllers\Accessories\AcessoriesController;
use App\Http\Controllers\Admin\ApproveVenderChangeRoleController;
use App\Http\Controllers\Admin\AprroveCarsController;
use App\Http\Controllers\Admin\DisableCarsController;
use App\Http\Controllers\Admin\DisableUserController;
use App\Http\Controllers\Admin\GetAllUsersController;
use App\Http\Controllers\Admin\GetAllUsersWithVendorRoleController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginAllController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisterVendorController;
use App\Http\Controllers\Product\CreateProductController;
use App\Http\Controllers\Vehicle\SearchController;
use App\Http\Controllers\Vehicle\VehicleApprovalController;
use App\Http\Controllers\Vehicle\VehicleCategoryController;
use App\Http\Controllers\Vehicle\VehicleCompanyController;
use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\Vehicle\VehicleFeaturesController;
use App\Http\Controllers\Vehicle\VehicleModelController;
use App\Http\Controllers\Vehicle\VehicleTypeController;
use App\Http\Controllers\Vendor\CreateAdController;
use App\Http\Controllers\Vendor\ShowDetailsController;
use App\Http\Controllers\ViewController;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;


///Routes Accessible By Anyone
Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/404', [ViewController::class, 'error'])->name('404');
Route::get('/about', [ViewController::class, 'about'])->name('about');
Route::get('/coming_soon', [ViewController::class, 'coming_soon'])->name('coming_soon');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::post('/login', [LoginAllController::class, 'login_all'])->name('login_all');
Route::get('/logout', [ViewController::class, 'logout'])->name('logout');
Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::post('/register', [RegisterUserController::class, 'register'])->name('register_user');
//Car Routes
Route::get('/cars', [ViewController::class, 'cars'])->name('cars');
Route::get('/car/{id}/details', [ViewController::class, 'inventory_single'])->name('inventory_single');
Route::get('/search/vehicles', [SearchController::class, 'search'])->name('vehicles.search');

// //Blog Routes
// Route::get('/blog_author', [ViewController::class, 'blog_author'])->name('blog_author');
// Route::get('/blog_grid', [ViewController::class, 'blog_grid'])->name('blog_grid');
// Route::get('/blog_list', [ViewController::class, 'blog_list'])->name('blog_list');
// Route::get('/blog_single', [ViewController::class, 'blog_single'])->name('blog_single');
// Route::get('/compare', [ViewController::class, 'compare'])->name('compare');
// Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
// Route::get('/faq', [ViewController::class, 'faq'])->name('faq');
// Route::get('/favourite', [ViewController::class, 'favourite'])->name('favourite');
// Route::get('/forgot_password', [ViewController::class, 'forgot_password'])->name('forgot_password');

///Acessories Routes
Route::get('/accessories', [ViewController::class, 'inventory_grid'])->name('accessory');
Route::get('/accessory/{id}/details', [AcessoriesController::class, 'accessory_details'])->name('accessory_details');


// Route::get('/notify', [ViewController::class, 'notify'])->name('notify');



/// Create Ad by Vendor



Route::get('/review', [ViewController::class, 'review'])->name('review');
Route::get('/vendor_grid', [ViewController::class, 'vendor_grid'])->name('vendor_grid');
Route::get('/vendors', [ViewController::class, 'vendor_list'])->name('vendor_list');
Route::get('vendor/{id}/details', [ShowDetailsController::class, 'details'])->name('vendor_details_users');

Route::middleware(['auth'])->group(function () {
    Route::get('/create_ads', [CreateAdController::class, 'create_ads'])->name('create_ads');
    Route::post('/create_ad', [CreateAdController::class, 'create_ad'])->name('ad_create');
    Route::get('/posted_ads', [ViewController::class, 'posted_ads'])->name('posted_ads');
    Route::get('/pricing_plan', [ViewController::class, 'pricing_plan'])->name('pricing_plan');
    Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
    Route::get('/setting', [ViewController::class, 'setting'])->name('setting');
    Route::post('/vendor/create', [RegisterVendorController::class, 'register'])->name('register_vendor');
    Route::post('/change-password', [RegisterVendorController::class, 'update'])->name('change.password');
});
Route::get('/privacy', [ViewController::class, 'privacy'])->name('privacy');



Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminViewController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/404', [AdminViewController::class, 'not_found'])->name('admin_404');
    Route::get('/login', [AdminViewController::class, 'login'])->name('admin_login');
    Route::get('/signup', [AdminViewController::class, 'signup'])->name('admin_signup');
    Route::get('/account', [AdminViewController::class, 'account'])->name('admin_account');
    Route::get('/chat', [AdminViewController::class, 'chat'])->name('admin_chat');
    Route::get('/reset-password', [AdminViewController::class, 'reset_password'])->name('admin_reset_password');
    Route::get('/new-password', [AdminViewController::class, 'new_password'])->name('admin_new_password');
    Route::get('/settings', [AdminViewController::class, 'settings'])->name('admin_settings');
    //Categories Routes
    Route::get('/categories', [VehicleCategoryController::class, 'read'])->name('categories');
    Route::get('/add_category', [VehicleCategoryController::class, 'add_category'])->name('add_category');
    Route::post('/add_category', [VehicleCategoryController::class, 'create'])->name('create_category');
    Route::get('/category/{id}/edit', [VehicleCategoryController::class, 'show'])->name('edit_category');
    Route::post('/category/{id}/edit', [VehicleCategoryController::class, 'update'])->name('category_edit');
    Route::post('/category/{id}/delete', [VehicleCategoryController::class, 'destroy'])->name('delete_category');
    //Features Routes
    Route::get('/features', [VehicleFeaturesController::class, 'show'])->name('features');
    Route::post('/feature/{id}/delete', [VehicleFeaturesController::class, 'delete'])->name('delete_feature');
    Route::get('/add_feature', [VehicleFeaturesController::class, 'add_feature'])->name('add_feature');
    Route::post('/add_feature', [VehicleFeaturesController::class, 'create'])->name('create_feature');
    // Company Routes
    Route::get('/company', [VehicleCompanyController::class, 'read'])->name('company');
    Route::get('/add_company', [VehicleCompanyController::class, 'add_company'])->name('add_company');
    Route::post('/add_company', [VehicleCompanyController::class, 'create'])->name('create_company');
    Route::get('/company/{id}/edit', [VehicleCompanyController::class, 'show'])->name('edit_company');
    Route::post('/company/{id}/edit', [VehicleCompanyController::class, 'update'])->name('company_edit');
    Route::post('/company/{id}/delete', [VehicleCompanyController::class, 'destroy'])->name('delete_company');
    //Car Routes
    Route::get('add_car', [VehicleController::class, 'add_vehicle_page'])->name('add_car');
    Route::get('/cars', [VehicleController::class, 'car_list'])->name('car_list');
    Route::get('/car/{id}/details', [VehicleController::class, 'car_details'])->name('car_details');
    Route::get('/car/approval', [VehicleApprovalController::class, 'car_approval'])->name('car_approval');
    Route::get('/approval/details', [VehicleApprovalController::class, 'car_details'])->name('car_approval_details');
    Route::post('/add_car', [VehicleController::class, 'add_car'])->name('create_car');
    Route::post('/delete/{id}/vehicle', [VehicleController::class, 'deleteVehicle'])->name('delete_vehicle');
    Route::post('/car/{id}/approve', [AprroveCarsController::class, 'approveCar'])->name('car_approve');
    Route::get('/car/approve/{id}/details', [AprroveCarsController::class, 'approve_car_details_page'])->name('car_approve_details');
    Route::post('/car/{id}/disaprove', [DisableCarsController::class, 'disaproveCar'])->name('car_disaprove');
    //Car Type Routes
    Route::get('/type', [VehicleTypeController::class, 'read'])->name('type');
    Route::get('/add_type', [VehicleTypeController::class, 'add_type'])->name('add_type');
    Route::post('/add_type', [VehicleTypeController::class, 'create'])->name('create_type');
    Route::get('/type/{id}/edit', [VehicleTypeController::class, 'show'])->name('edit_type');
    Route::post('/type/{id}/edit', [VehicleTypeController::class, 'update'])->name('type_edit');
    Route::post('/type/{id}/delete', [VehicleTypeController::class, 'destroy'])->name('delete_type');
    //Users Routes
    Route::get('/users', [GetAllUsersController::class, 'getUsers'])->name('all_users');
    Route::post('delete/{id}/users', [GetAllUsersController::class, 'deleteUser'])->name('delete_user');
    Route::get('users/{id}/details', [GetAllUsersController::class, 'user_details'])->name('user_details');
    // Vendor Routes
    Route::get('/vendors', [GetAllUsersWithVendorRoleController::class, 'getUsers'])->name('all_vendors');
    Route::post('vendors/{id}/disaprove', [DisableUserController::class, 'disableUser'])->name('disable_vendor');
    Route::post('vendors/{id}/approve', [ApproveVenderChangeRoleController::class, 'approveVendor'])->name('approve_vendor');
    Route::get('vendors/{id}/details', [VendorController::class, 'details'])->name('vendor_details');

    //Accessories Routes
    Route::get('accessories', [AcessoriesController::class, 'show'])->name('acessories');
    Route::get('add_accessory', [AcessoriesController::class, 'add_acessory_show'])->name('add_acessory');
    Route::post('add_accessory', [AcessoriesController::class, 'create'])->name('acessory_add');
    Route::get('delete/{id}/accessory', [AcessoriesController::class, 'destroy'])->name('delete_accessory');
    //Model Routes
    Route::get('/models', [VehicleModelController::class, 'show'])->name('models.show');
    Route::get('/add_model', [VehicleModelController::class, 'add'])->name('model.add');
    Route::post('/add_model', [VehicleModelController::class, 'create'])->name('model.add');
    Route::post('/model/{id}/delete', [VehicleModelController::class, 'delete'])->name('model.delete');
});



/// Otp routes
Route::post('/verify-otp', [OtpController::class, 'verifyOtp'])->name('verify_otp');
Route::post('/resend-otp', [OtpController::class, 'resendOtp'])->name('resend-otp');
Route::middleware('otp.verify')->group(function () {
    Route::get('verify-otp', [OtpController::class, 'otp'])->name('verify_otp_page');
});


// Route::get('/users', [AuthController::class, 'users']);




Route::fallback(function () {
    return redirect('/404');
});
