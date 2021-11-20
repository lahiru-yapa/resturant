<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, "index"])->name('dashboard');

Route::get('about', [HomeController::class, "about"])->name('about');

Route::get('hotel', [HomeController::class, "hotel"])->name('hotel');
Route::get('bakery', [HomeController::class, "bakery"])->name('bakery');
Route::get('cake', [HomeController::class, "cake"])->name('cake');


Route::get('gallery', [HomeController::class, "gallery"])->name('gallery');
Route::get('gallery-page2', [HomeController::class, "gallery2"])->name('gallery2');

Route::get('contact', [HomeController::class, "contact"])->name('contact');

Route::post('contact-us', [HomeController::class, "store"])->name('contact.store');

Route::post('order', [HomeController::class, "order_store"])->name('order.store');

Route::post('subscribe', [HomeController::class, "subcribe_store"])->name('subcribe.store');

