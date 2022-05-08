<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HamdController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Front\CartController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(HamdController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/shop/{id}', 'shop')->name('shop');
    Route::get('/get-product-data-for-modal', 'getProductDataForModal')->name('get-product-data-for-modal');
    Route::get('/product-details/{id}', 'details')->name('product.details');
});

Route::controller(CartController::class)->group(function () {
    Route::post('/add-to-cart', 'addToCart')->name('cart.add');
    Route::get('/cart', 'viewCart')->name('cart.view');
    Route::get('/remove-product-from-cart/{id}', 'removeProductFromCart')->name('remove-product-from-cart');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/add-category', 'index')->name('category.add');
        Route::post('/new-category', 'create')->name('category.new');
        Route::get('/manage-category', 'manage')->name('category.manage');
        Route::get('/edit-category/{id}', 'edit')->name('category.edit');
        Route::post('/update-category/{id}', 'update')->name('category.update');
        Route::get('/delete-category/{id}', 'delete')->name('category.delete');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/add-subcategory', 'index')->name('subcategory.add');
        Route::post('/new-subcategory', 'create')->name('subcategory.new');
        Route::get('/manage-subcategory', 'manage')->name('subcategory.manage');
        Route::get('/edit-subcategory/{id}', 'edit')->name('subcategory.edit');
        Route::post('/update-subcategory/{id}', 'update')->name('subcategory.update');
        Route::get('/delete-subcategory/{id}', 'delete')->name('subcategory.delete');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('/add-brand', 'index')->name('brand.add');
        Route::post('/new-brand', 'create')->name('brand.new');
        Route::get('/manage-brand', 'manage')->name('brand.manage');
        Route::get('/edit-brand/{id}', 'edit')->name('brand.edit');
        Route::post('/update-brand/{id}', 'update')->name('brand.update');
        Route::get('/delete-brand/{id}', 'delete')->name('brand.delete');
    });

    Route::controller(UnitController::class)->group(function () {
        Route::get('/add-unit', 'index')->name('unit.add');
        Route::post('/new-unit', 'create')->name('unit.new');
        Route::get('/manage-unit', 'manage')->name('unit.manage');
        Route::get('/edit-unit/{id}', 'edit')->name('unit.edit');
        Route::post('/update-unit/{id}', 'update')->name('unit.update');
        Route::get('/delete-unit/{id}', 'delete')->name('unit.delete');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/add-product', 'index')->name('product.add');
        Route::post('/new-product', 'create')->name('product.new');
        Route::get('/manage-product', 'manage')->name('product.manage');
        Route::get('/edit-product/{id}', 'edit')->name('product.edit');
        Route::post('/update-product/{id}', 'update')->name('product.update');
        Route::get('/delete-product/{id}', 'delete')->name('product.delete');

        Route::get('/get-subcategory-by-category-id/{id}', 'getSubCategory')->name('get-subcategory-by-category-id');
    });
});
