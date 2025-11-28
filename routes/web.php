<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Common\CommonController;
use App\Http\Controllers\FrontController;

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

Route::view('/', 'front.home');
Route::view('/home', 'front.home')->name('home');

Route::view('/about-us', 'front.about-us')->name('about-us');
Route::view('/terms-conditions', 'front.terms-conditions')->name('terms-conditions');
Route::view('/privacy-policy', 'front.privacy-policy')->name('privacy-policy');
Route::view('/refund-policy', 'front.refund-policy')->name('refund-policy');

Route::view('/our-services', 'front.our-services')->name('our-services');
Route::view('/debt-settlement', 'front.debt-settlement')->name('debt-settlement');
Route::post('/debt-settlement', [FrontController::class, 'debtRestructuring'])->name('debt-settlement');

Route::view('/debt-restructuring', 'front.debt-restructuring')->name('debt-restructuring');
Route::post('/debt-restructuring', [FrontController::class, 'debtRestructuring'])->name('debt-restructuring');

Route::get('checkout/{slug}', [FrontController::class, 'checkout'])->name('checkout');
Route::post('payment', [FrontController::class, 'payment'])->name('payment');

Route::view('/contact', 'front.contact')->name('contact');
Route::post('/contact', [FrontController::class, 'contactUs'])->name('contact');

Route::view('/legal-services-ppc', 'front.legal-services-ppc')->name('legal-services-ppc');
Route::view('/Supplier-Services', 'front.supplier-services')->name('supplier-services');

Route::get('test', [CommonController::class, 'test'])->name('test');
Route::get('{guard}', fn($guard) => redirect($guard == 'admin' ?  url('/admin/login') : url("/$guard/login")))->whereIn('guard', ['admin']);
Route::redirect('admin/dashboard', '/dashboard');


Route::middleware(['authCheck'])->group(function () {

    // Open Routes
    Route::post('get-cities', [CityController::class, 'get_cities'])->name('cities.list');
    Route::post('upload-image', [CommonController::class, 'upload_image'])->name('upload_image');
    Route::get('get-user-list-filter', [CommonController::class, 'get_user_list_filter'])->name('get_user_list_filter');
});

Route::fallback(function () {
    abort(404);
});
