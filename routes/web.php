<?php

use Illuminate\Support\Facades\Auth;
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
// FrontendController Start
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('car', [App\Http\Controllers\FrontendController::class, 'car'])->name('car');
Route::get('car/detail/{slug}', [App\Http\Controllers\FrontendController::class, 'cardetails'])->name('car.detail');
Route::get('sell-car', [App\Http\Controllers\FrontendController::class, 'sellcar'])->name('sell.car');
Route::get('contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/post', [App\Http\Controllers\FrontendController::class, 'contactpost'])->name('contact.post');
Route::post('/sell/car/post', [App\Http\Controllers\FrontendController::class, 'sellcarpost'])->name('sell.car.post');

// FrontendController End





Auth::routes();



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/contact', [App\Http\Controllers\DashboardController::class, 'contact'])->name('dashboard.contact');
Route::post('/dashboard/contact/delete/{id}', [App\Http\Controllers\DashboardController::class, 'contactdelete'])->name('contact.delete');
Route::get('/dashboard/sell/car', [App\Http\Controllers\DashboardController::class, 'sellcar'])->name('dashboard.sell.car');
Route::get('/dashboard/sell/car/download/{id}', [App\Http\Controllers\DashboardController::class, 'sellcardownload'])->name('dashboard.sell.car.download');
Route::get('/dashboard/sell/car/delete/{id}', [App\Http\Controllers\DashboardController::class, 'sellcardelete'])->name('dashboard.sell.car.delete');


// BannerController Start
Route::resource('/dashboard/banner', App\Http\Controllers\BannerController::class);
// BannerController Ends

// CarController Start
Route::resource('/dashboard/car', App\Http\Controllers\CarController::class);
Route::get('dashboard/car/gallery/{gallery}/delete', [App\Http\Controllers\CarController::class, 'galleryDelete'])->name('car.gallery.delete');
// CarController Ends