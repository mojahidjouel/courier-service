<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController as apictrl;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('deliveryman_login',[apictrl::class,'signInCheck']);
Route::get('orders/{uid}',[apictrl::class,'orders']);
Route::get('ordertrack/{uid}',[apictrl::class,'ordertrack']);
Route::post('ordertrack_save',[apictrl::class,'ordertrack_save']);