<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\DigitalsController;

/*
|------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/print-publications', [FrontendController::class, 'print']);
Route::get('/digital-overview', [FrontendController::class, 'digital']);
Route::get('/publication/{slug}', [FrontendController::class, 'publication']);

//Route::post('/email', [MailController::class, 'sendEmail'])->name('send.email');

Auth::routes();

Route::group(['middleware' => ['auth','isAdmin','verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
 
    // Services Routes
    Route::get('/admin-publications', [PublicationsController::class, 'index']);
    Route::post('/add-publication',[PublicationsController::class,'add_publication']);

    // Services Routes
    Route::get('/admin-digitals', [DigitalsController::class, 'index']);
    
    // Services Routes
    // Route::get('/services', [PublicationsController::class, 'index']);
    // Route::get('/add-service', [ServicesController::class, 'addService']);
    // Route::post('/save-service', [ServicesController::class, 'saveService']);
    // Route::get('/edit-service/{id}', [ServicesController::class, 'editService']);
    // Route::post('/update-service/{id}', [ServicesController::class, 'updateService']);
    // Route::get('/delete-service/{id}', [ServicesController::class, 'deleteService']);
    // Route::get('/service-active/{id}', [ServicesController::class, 'active']);
    // Route::get('/service-deactive/{id}', [ServicesController::class, 'deactive']);
 
 });
 
 