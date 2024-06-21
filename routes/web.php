<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobOrderController;
use App\Http\Controllers\Admin\StaffController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::match(['get','post'],'login', [AdminAuthController::class,'login'])->name('admin');
    Route::match(['get','post'],'/', [AdminAuthController::class,'login'])->name('login');
});
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth:admin'], function(){

    Route::match(['get','post'],'logout', [AdminAuthController::class,'logout'])->name('logout');

    Route::get('profile', [AdminAuthController::class,'profile'])->name('profile');
    Route::match(['get','post'],'upload-profile', [AdminAuthController::class,'upload_profile'])->name('upload-profile');
    Route::match(['get','post'],'update-profile', [AdminAuthController::class,'update_profile'])->name('update-profile');
    // Route::match(['get','post'],'profile', [AdminAuthController::class,'profile'])->name('profile');

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('all-staff', [StaffController::class,'index'])->name('all-staff');
    Route::get('add-staff', [StaffController::class,'create'])->name('add-staff');
    Route::post('add-staff', [StaffController::class,'store'])->name('add-staff');
    Route::get('edit-staff/{id}', [StaffController::class,'edit'])->name('edit-staff');
    Route::post('staff-change-status', [StaffController::class,'changeStatus'])->name('staff-change-status');
    Route::post('update-staff', [StaffController::class,'update'])->name('update-staff');

    Route::get('all-client', [ClientController::class,'index'])->name('all-client');
    Route::get('add-client', [ClientController::class,'create'])->name('add-client');
    Route::post('add-client', [ClientController::class,'store'])->name('add-client');
    Route::get('edit-client/{id}', [ClientController::class,'edit'])->name('edit-client');
    Route::post('update-client', [ClientController::class,'update'])->name('update-client');
    Route::post('client-change-status', [ClientController::class,'changeStatus'])->name('client-change-status');

    Route::get('assigned-job-order', [JobOrderController::class,'index'])->name('assigned-job-order');
    Route::get('create-job-order', [JobOrderController::class,'create'])->name('create-job-order');
    Route::post('create-job-order', [JobOrderController::class,'store'])->name('create-job-order');
    Route::get('view-job-order', [JobOrderController::class,'show'])->name('view-job-order');
    Route::post('get_client', [JobOrderController::class,'getClient'])->name('get_client');
    Route::get('reports', [JobOrderController::class,'report'])->name('reports');
});
