<?php

use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\AdminHomeController;
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

Route::get('/Dashboard_Admin', [AdminHomeController::class,'index']);
Route::get('/empty_page', [AdminHomeController::class,'index']);

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




    Route::view('Add_shipment','Livewire.show_form');

//    ////////Price route///////

    Route::resources([
        'prices' => PriceController::class,
    ]);

    //route news , convention and contact//////////
        Route::resource('news', 'newsController');
        Route::resource('convention', 'conventionController');

        Route::get('contacts','contactController@index')->name('contact.index');
        Route::get('contact/{id}','contactController@show')->name('contact.show');
        Route::get('contacts/{id}','contactController@destroy')->name('contact.destroy');


    ///////////////
    require __DIR__.'/auth.php';
});


