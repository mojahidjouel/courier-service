<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\RoleController as role;

use App\Http\Controllers\Backend\ShipmentController as shipments;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\AssetController as assets;
use App\Http\Controllers\Backend\CompanyController as companies;
use App\Http\Controllers\Backend\BranchController as branches;



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

Route::middleware(['checkauth'])->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
    
    
    Route::resource('/asset', assets::class);
    Route::resource('/shipment', shipments::class);
    Route::resource('/company', companies::class);
    Route::resource('/branch', branches::class);
});

Route::get('/', function () {
    return view('frontend.home');

});


// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');
