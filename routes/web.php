<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Client\WelcomeController::class,'index']);

Auth::routes();


Route::get('/category/{slug}',[App\Http\Controllers\Client\CategoryController::class,'index'] );


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\Client\ShopController::class,'index'])->name('shop');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [App\Http\Controllers\Client\CartController::class,'index'])->name('cart');
    Route::get('/cart/{id}/add', [App\Http\Controllers\Client\ShopController::class,'add_to_cart'])->name('shop.cart.add');
    Route::post('/cart/{user_id}/update', [App\Http\Controllers\Client\ShopController::class,'update_cart'])->name('shop.cart.update');
    Route::get('/cart/checkout', [App\Http\Controllers\Client\CartController::class, 'view_checkout'])->name('cart.checkout');
    Route::post('/address/create', [App\Http\Controllers\Client\AddressController::class, 'store'])->name('address.create');
    
    Route::get('/razorpay/{price}', [App\Http\Controllers\Payment\RazorpayController::class, 'index'])->name('razorpay.payment');
    Route::post('/order/store', [App\Http\Controllers\Client\OrderController::class, 'store'])->name('order.store');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');

    // CATEGORIES ROUTES
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.categories');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin.category.create');
    Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/category/{id}/show', [App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin.category.show');
    Route::get('/category/{id}/edit', [App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('/category/{id}/update', [App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin.category.update');
    Route::get('/category/{id}/delete', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin.category.delete');

    // PRODUCTS ROUTES
    Route::get('/products', [App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin.products');
    Route::get('/product/create', [App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin.product.create');
    Route::post('/product/store', [App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin.product.store');
    Route::get('/product/{id}/show', [App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin.product.show');
    Route::get('/product/{id}/edit', [App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin.product.edit');
    Route::post('/product/{id}/update', [App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin.product.update');
    Route::get('/product/{id}/delete', [App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin.product.delete');

    // Featured Routes
    Route::get('/featured/categories',[App\Http\Controllers\Admin\FeaturedController::class,'view_featured_categories']);
    Route::post('/featured/categories/store',[App\Http\Controllers\Admin\FeaturedController::class,'store_featured_category']);
    Route::get('/featured/categories/delete/{id}',[App\Http\Controllers\Admin\FeaturedController::class,'remove_featured_category']);

    Route::get('/featured/products',[App\Http\Controllers\Admin\FeaturedController::class,'view_featured_products']);
    Route::post('/featured/products/store',[App\Http\Controllers\Admin\FeaturedController::class,'store_featured_product']);
    Route::get('/featured/products/delete/{id}',[App\Http\Controllers\Admin\FeaturedController::class,'remove_featured_product']);
   
    // Trash Route
    
    Route::get('/categories/trash',[App\Http\Controllers\Admin\CategoryController::class,'trash']);
    Route::get('/trash/category/restore/{id}',[App\Http\Controllers\Admin\CategoryController::class,'restore']);
    Route::get('/trash/category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete']);
    
    Route::get('/products/trash',[App\Http\Controllers\Admin\ProductController::class,'trash']);
    Route::get('/trash/product/restore/{id}',[App\Http\Controllers\Admin\ProductController::class,'restore']);
    Route::get('/trash/product/delete/{id}',[App\Http\Controllers\Admin\ProductController::class,'delete']);

   


});