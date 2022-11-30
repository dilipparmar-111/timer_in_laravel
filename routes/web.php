<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clear_cache', function () {
    \Artisan::call('optimize:clear');
    return redirect()->route('home')->with("success","Cache is cleared");
});

Auth::routes();
Route::group(['middleware' => ['auth','language']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::get('/status_change/{id}', [App\Http\Controllers\Admin\SliderController::class, 'status_change'])->name('status_change');
    Route::post('/status_timer/{id}', [App\Http\Controllers\Admin\SliderController::class, 'status_timer'])->name('status_timer');
    Route::get('/gujarati', [App\Http\Controllers\HomeController::class, 'gujarati'])->name('gujarati');
    Route::get('/english', [App\Http\Controllers\HomeController::class, 'english'])->name('english');

    Route::resource('/users', App\Http\Controllers\Admin\UsersController::class);
    Route::resource('/products', App\Http\Controllers\Admin\ProductController::class);
    Route::get('products-status/{id}',[App\Http\Controllers\Admin\ProductController::class,'product_status'])->name('products.status');
});
