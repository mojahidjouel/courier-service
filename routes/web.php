<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\AuthenticationController as auth;

use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\AssetController as assets;
use App\Http\Controllers\Backend\ShipmentController as shipments;



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


Route::middleware(['checkrole'])->group(function(){
    Route::get('/dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::resource('/user', user::class);
    Route::resource('/asset', assets::class);
    Route::resource('/shipment', shipments::class);
});

Route::get('/', function () {
    return view('frontend.home');

});


// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');