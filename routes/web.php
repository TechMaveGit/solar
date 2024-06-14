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
    Route::match(['get','post'],'logout', [AdminAuthController::class,'logout'])->name('logout');
});
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth:admin'], function(){

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('all-staff', [StaffController::class,'index'])->name('all-staff');
    Route::get('add-staff', [StaffController::class,'create'])->name('add-staff');
    Route::post('add-staff', [StaffController::class,'store'])->name('add-staff');
    Route::get('edit-staff/{id}', [StaffController::class,'edit'])->name('edit-staff');
    Route::post('update-staff', [StaffController::class,'update'])->name('update-staff');

    Route::get('all-client', [ClientController::class,'index'])->name('all-client');
    Route::get('add-client', [ClientController::class,'create'])->name('add-client');
    Route::post('add-client', [ClientController::class,'store'])->name('add-client');

    Route::get('assigned-job-order', [JobOrderController::class,'index'])->name('assigned-job-order');
    Route::get('create-job-order', [JobOrderController::class,'create'])->name('create-job-order');
    Route::get('reports', [JobOrderController::class,'report'])->name('reports');
});
