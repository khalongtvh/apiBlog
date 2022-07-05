<?php

use App\Http\Controllers\Api\v1\CustomerController as v1_CustomerController;
use App\Http\Controllers\Api\v2\CustomerController as v2_CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [HomeController::class, 'index']);

//thêm tiền tố 'v1' 
//example : http://127.0.0.1:8000/api/v1/customer
Route::prefix('v1')->group(function(){
    Route::resource('customer', v1_CustomerController::class)->except(['create', 'edit']);
});

Route::prefix('v2')->group(function(){
    Route::resource('customer', v2_CustomerController::class)->except(['create', 'edit']);
});

// Route::resource('customer', CustomerController::class)->only(['index', 'show', 'update', 'destroy', 'store']);

//except: Loại trừ -- only: lấy hết


