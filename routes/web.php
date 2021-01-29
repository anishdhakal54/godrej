<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ConfigurationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SlideshowController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
//Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
//Route::get('/settings', [ConfigurationController::class,'getConfiguration'])->name('settings');
//Route::post('/settings', [ConfigurationController::class,'postConfiguration'])->name('settings.update');
Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Backend',
    'middleware' => 'auth'
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/settings', [ConfigurationController::class, 'getConfiguration'])->name('settings');
    Route::post('/settings', [ConfigurationController::class, 'postConfiguration'])->name('settings.update');
    Route::get('/menus', [MenuController::class, 'index'])->name('menus.show');
    Route::post('harimayco/addmenu', [MenuController::class, 'addmenu'])->name('haddmenu');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.show');
    Route::resource('/product', 'ProductController', ['except' => ['show']]);
//    Route::get('/products/json', 'ProductController@getProductsJson')->name('products.json');
//    Route::get('/search-product', 'ProductController@searchProduct')->name('search.product');

});


Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Backend',
    'middleware' => 'auth'
], function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::post('/categories/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/categories-json', [CategoryController::class, 'getCategoriesJson'])->name('categories.json');
//    Route::get('/get-slideshows', 'SlideshowController@getSlideshowsJson')->name('slideshows.json');

});

//Route::group([
//    'prefix' => 'dashboard',
//    'as' => 'dashboard.',
//    'namespace' => 'Backend',
//    'middleware' => 'auth'
//], function () {
//    Route::resource('slideshows', ' SlideshowController', ['except' => ['show']]);
//
//});

Route::group(['prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Backend',
    'middleware' => 'auth'], function () {
    Route::get('/slideshows', [SlideshowController::class,'index'])->name('slideshows.index');
    Route::get('/slideshows/create', [SlideshowController::class,'create'])->name('slideshows.create');
    Route::post('slideshows', [SlideshowController::class,'store'])->name('slideshows.store');
    Route::get('slideshows/{id}', [SlideshowController::class,'edit'])->name('slideshows.edit');
    Route::post('slidefadsfshows', [SlideshowController::class,'update'])->name('slideshows.update');


});

Route::group(['prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Backend',
    'middleware' => 'auth'], function () {
//    Route::resource('product', ProductController::class);
    Route::resource('/product', 'ProductController');
    Route::get('/products/json', 'ProductController@getProductsJson')->name('products.json');

});

//Route::resource('/categories', CategoryController::class)->except(['show']);
//Route::resource('/category', CategoryController::class)->except(['create', 'show']);
