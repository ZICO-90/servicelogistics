<?php
namespace App\Http\Controllers\Admin;
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




/////////najat route////////////

//
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){
//
//    Route::get('/dashboard/user', function () {
//        return view('Dashboard.User.index');
//    })->middleware(['auth'])->name('dashboard.user');
//
//
//    Route::get('/dashboard/admin', function () {
//        return view('Dashboard.Admin.index');
//    })->middleware(['auth:admin'])->name('dashboard.admin');
//
//    Route::get('/empty_page', function () {
//        return view('Dashboard.Admin.empty_page');
//    });
//
//    Route::view('Add_shipment','Livewire.show_form');
//
////    ////////Price route///////
////
//    Route::resources([
//        'prices' => PriceController::class,
//    ]);


////////end najat route/////


