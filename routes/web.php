<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\EndUser\EndUserHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/', 'as' => 'endUser.'], function() {

    Route::get('/', [EndUserHomeController::class, 'index'])->name('index');
});



