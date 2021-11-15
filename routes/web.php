<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\InfoSiteController;
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

    Route::group(['prefix' => 'info-site', 'as' => 'info-site.'], function () {
        Route::get('/', [InfoSiteController::class, 'index'])->name('index');
        Route::get('/create', [InfoSiteController::class, 'create'])->name('create');
        Route::post('/store', [InfoSiteController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [InfoSiteController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::put('/update', [InfoSiteController::class, 'update'])->name('update');
        Route::delete('/delete', [InfoSiteController::class, 'delete'])->name('delete');
    });
});

Route::group(['prefix' => '/', 'as' => 'endUser.'], function() {

    Route::get('/', [EndUserHomeController::class, 'index'])->name('index');
});



