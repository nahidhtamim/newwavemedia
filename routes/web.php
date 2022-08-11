<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigitalsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicationsController;

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
Route::get('/print-publications', [FrontendController::class, 'prints']);
Route::get('/digital-overview', [FrontendController::class, 'digitals']);
Route::get('/publication/{slug}', [FrontendController::class, 'publication']);
Route::get('/digital/{slug}', [FrontendController::class, 'digital']);

Route::get('/contact',[ContactController::class, 'contact']);
Route::get('refresh_captcha',[ContactController::class, 'refreshCaptcha'])->name('refresh_captcha');
Route::post('/send-email', [ContactController::class, 'contactMail'])->name('contact.send');

//Route::post('/email', [MailController::class, 'sendEmail'])->name('send.email');

Auth::routes();

Route::group(['middleware' => ['auth','isAdmin','verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
 
    // Services Routes
    Route::get('/admin-publications', [PublicationsController::class, 'index']);
    Route::post('/add-publication',[PublicationsController::class,'add_publication']);
    Route::get('/edit-publication/{slug}', [PublicationsController::class, 'edit_publication']);
    Route::post('/update-publication/{slug}', [PublicationsController::class, 'update_publication']);
    Route::get('/delete-publication/{slug}', [PublicationsController::class, 'delete_publication']);


    // Services Routes
    Route::get('/admin-digitals', [DigitalsController::class, 'index']);
    Route::post('/add-digital',[DigitalsController::class,'add_digital']);
    Route::get('/edit-digital/{slug}', [DigitalsController::class, 'edit_digital']);
    Route::post('/update-digital/{slug}', [DigitalsController::class, 'update_digital']);
    Route::get('/delete-digital/{slug}', [DigitalsController::class, 'delete_digital']);


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
 
 