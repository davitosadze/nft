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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Auth::routes(['register' => false]);
    Route::middleware('auth')->name('admin.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

        Route::resource('categories', CategoryController::class);
        Route::resource('platforms', PlatformController::class);
        Route::resource('market', MarketController::class);
    });
});


Route::get("/", "Front\IndexController@index")->name('index');
Route::get("/categories/{id}", "Front\CategoryController@category")->name('category');
Route::get("/market/{market_item}", 'Front\MarketController@details')->name('item-details');
