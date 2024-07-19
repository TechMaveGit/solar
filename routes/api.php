<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\JobOrderController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//,'prefix' => 'auth'
Route::middleware('throttle:120,1')->group(function () {


    Route::post('login', [AuthController::class, 'login']);
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('/reset-password', [AuthController::class, 'resetPassword']);
    Route::post('refresh', [AuthController::class, 'refresh']);

    Route::group(['middleware' => 'auth:api'], function ($router) {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('profile', [AuthController::class, 'profile']);
        Route::post('update-profile', [AuthController::class, 'updateProfile']);
        Route::post('upload-profile', [AuthController::class, 'uploadProfile']);

        Route::get('job-orders', [JobOrderController::class, 'JobOrders']);
        Route::get('view-job-order/{id}', [JobOrderController::class, 'viewJobOrder']);
        Route::post('update-job-order/{id}', [JobOrderController::class, 'updateJobOrder']);
        Route::get('job-order-history', [JobOrderController::class, 'jobOrderHistory']);
        Route::post('job-order-change-status', [JobOrderController::class, 'jobStatusChange']);

        Route::get('view-document/{id}', [JobOrderController::class, 'viewDocument']);

    });

});
