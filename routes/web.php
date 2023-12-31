<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\RoleController as role;


use App\Http\Controllers\Backend\AdminUserController as adminuser;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\AssetController as assets;
use App\Http\Controllers\Backend\CompanyController as companies;
use App\Http\Controllers\Backend\BranchController as branches;
use App\Http\Controllers\Backend\GeneralsettingController as general_settings;
use App\Http\Controllers\Backend\PriceController as prices;
use App\Http\Controllers\Backend\CityController as cities;
use App\Http\Controllers\Backend\ShipmentController as shipment;
use App\Http\Controllers\Backend\OrdertrackController as ordertrack;

/* user panel */
use App\Http\Controllers\User\AuthController as userauth;
use App\Http\Controllers\User\DashboardController as userdashboard;
use App\Http\Controllers\User\ShipmentController as shipments;

use App\Http\Controllers\HomeController as home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');



Route::get('user/register', [userauth::class,'signUpForm'])->name('user.register');
Route::post('user/register', [userauth::class,'signUpStore'])->name('user.register.store');
Route::get('user/login', [userauth::class,'signInForm'])->name('user.login');
Route::post('user/login', [userauth::class,'signInCheck'])->name('user.login.check');
Route::get('user/logout', [userauth::class,'singOut'])->name('user.LogOut');


Route::middleware(['checkuserauth'])->prefix('user')->group(function(){
    Route::get('dashboard', [userdashboard::class,'index'])->name('userdashboard');
    //Route::resource('user', user::class);
    Route::resource('order', shipments::class);
    Route::get('order_price', [shipments::class,'order_price'])->name('order_price');
    Route::get('ordertrack/{id}', [shipments::class,'ordertrack'])->name('ordertrack');
});


Route::middleware(['checkauth'])->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('adminuser', adminuser::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
    Route::resource('user', user::class);  
    Route::resource('asset', assets::class);
    Route::resource('company', companies::class);
    Route::resource('branch', branches::class);
    Route::resource('general_setting', general_settings::class);
    Route::resource('price', prices::class);
    Route::resource('city', cities::class);
    Route::resource('shipment', shipment::class);
    Route::resource('ordertrack', ordertrack::class);
});

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('front-ordertrack', [home::class,'ordertrack'])->name('front.ordertrack');


// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');
