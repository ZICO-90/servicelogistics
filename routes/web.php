<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\EndUser\EndUserHomeController;
use App\Http\Controllers\Admin\dileveryController;
use App\Http\Controllers\Admin\employesController;
use App\Http\Controllers\Admin\WelcomSectionController;
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




/*
    ahmed abdullah  >  there is a problem In this 
    1 - Action Steps localization
        # Installations package mcnamara
            - routeMiddleware in  Kernel > Validated
            - config in laravellocalization.php -> Validated  (languages choose: arabic , English)
            - C:\Users\hp\Desktop\Group2\vendor\mcamara\laravel-localization
    1 - the problem    
        # Can not Call route ar , en  > not found  pages

*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

   
        Route::get('/', function()
	{
		return View::('Dashboard.Admin.index');
        
	});

    Route::get('/text', function()
	{
		return View::('Dashboard.Admin.index');
        
	});
    
   

});

    

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    

    //this  group route model delivery 
        Route::group(['prefix' => 'delivery', 'as' => 'delivery.'], function () {
        Route::get('/', [dileveryController::class, 'index'])->name('index');
        Route::get('/create', [dileveryController::class, 'create'])->name('create');
        Route::POST('/store', [dileveryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [dileveryController::class, 'edit'])->name('edit');
        Route::put('/update', [dileveryController::class, 'update'])->name('update');

    //delete used link tags
        Route::get('/destroy/{id}', [dileveryController::class, 'destroy'])->name('destroy');

    // Settings activated  display item  by default 4 items but expandable
        Route::POST('/stauts', [dileveryController::class, 'activated'])->name('stauts');

    // Settings activated  display item  limited just Two show required (activatedII -> (II)  number 2 language Latin )
        Route::put('/stautsII', [dileveryController::class, 'activatedII'])->name('stautsII');
    // Settings  record view page 
        Route::get('/record', [dileveryController::class, 'record'])->name('record');
    // Settings  control limited View records page (Home)
        Route::put('/records', [dileveryController::class, 'records'])->name('records');
    }) ;

    //this  group route model employe 
        Route::group(['prefix' => 'employe', 'as' => 'employe.'], function () {

        Route::get('/', [employesController::class, 'index'])->name('index');
        Route::get('/create', [employesController::class, 'create'])->name('create');
        Route::post('/store', [employesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [employesController::class, 'edit'])->name('edit');
        Route::put('/update', [employesController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [employesController::class, 'destroy'])->name('destroy');
     // Settings  control Display show just one employe item in page (Home)
        Route::get('/display/{id}/{bool}', [employesController::class, 'IsDisplayActive'])->name('activated');

    });

     //Settings this  group route model welcome-section-Title
        Route::group(['prefix' => 'welcome', 'as' => 'welcome.'], function () {

        Route::get('/', [WelcomSectionController::class, 'index'])->name('index');
        Route::get('/create', [WelcomSectionController::class, 'create'])->name('create');
        Route::post('/store', [WelcomSectionController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [WelcomSectionController::class, 'edit'])->name('edit');
        Route::put('/update', [WelcomSectionController::class, 'update'])->name('update');
     // Settings  control Display show just one welcome-section item in  page (Home)
        Route::get('/display/{id}/{bool}', [WelcomSectionController::class, 'IsDisplayActive'])->name('activated');
        Route::get('/destroy/{id}', [WelcomSectionController::class, 'destroy'])->name('destroy');

    });

});

Route::group(['prefix' => '/', 'as' => 'endUser.'], function() {

    Route::get('/', [EndUserHomeController::class, 'index'])->name('index');
});


