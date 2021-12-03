<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\PriceController;

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

Route::get('/Dashboard_Admin', [DashboardController::class,'index']);
Route::get('/empty_page', [DashboardController::class,'index']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.index');
    })->middleware(['auth'])->name('dashboard.user');


    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.index');
    })->middleware(['auth:admin'])->name('dashboard.admin');

    Route::get('/empty_page', function () {
        return view('Dashboard.Admin.empty_page');
    });


    Route::view('Add_shipment','Livewire.show_form');





//    ////////Price route///////

    Route::resources([
        'prices' => PriceController::class,
    ]);

    //route news and convention//////////
        Route::resource('news', 'newsController');
        Route::resource('convention', 'conventionController');


    ///////////////
    require __DIR__.'/auth.php';
});


