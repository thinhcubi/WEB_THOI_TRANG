<?php

use App\Http\Controllers\ProfileController;
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



Route::middleware('auth')->group(function (){
    Route::prefix('/admin')->group(function (){
        Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
        Route::prefix('/products')->group(function (){
            Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('product.list');
            Route::get('/create',[\App\Http\Controllers\ProductController::class,'create'])->name('product.create');
            Route::post('/create',[\App\Http\Controllers\ProductController::class,'store'])->name('product.store');
            Route::get('{id}/delete',[\App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');
            Route::get('{id}/edit',[\App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
            Route::post('/edit',[\App\Http\Controllers\ProductController::class,'update'])->name('product.update');
            Route::get('{id}/detail',[\App\Http\Controllers\ProductController::class,'detail'])->name('product.detail');
            Route::post('/search',[\App\Http\Controllers\ProductController::class,'search'])->name('product.search');
            Route::post('/destroy',[\App\Http\Controllers\ProductController::class,'destroy'])->name('product.destroy');
        });
      Route::prefix('/categories')->group(function (){
          Route::get('/',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.list');
          Route::get('/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
          Route::post('/create',[\App\Http\Controllers\CategoryController::class,'store'])->name('category.store');
          Route::get('{id}/delete',[\App\Http\Controllers\CategoryController::class,'delete'])->name('category.delete');
          Route::get('{id}/edit',[\App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
          Route::post('/edit',[\App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
      });
      Route::prefix('/producers')->group(function (){
          Route::get('/',[\App\Http\Controllers\ProducerController::class,'index'])->name('producer.list');
          Route::get('/create',[\App\Http\Controllers\ProducerController::class,'create'])->name('producer.create');
          Route::post('/create',[\App\Http\Controllers\ProducerController::class,'store'])->name('producer.store');
          Route::get('{id}/delete',[\App\Http\Controllers\ProducerController::class,'delete'])->name('producer.delete');
          Route::get('{id}/edit',[\App\Http\Controllers\ProducerController::class,'edit'])->name('producer.edit');
          Route::post('/edit',[\App\Http\Controllers\ProducerController::class,'update'])->name('producer.update');
      });
      Route::prefix('/users')->group(function (){
          Route::get('/',[ProfileController::class,'index'])->name('user.list');
          Route::get('{id}/delete',[\App\Http\Controllers\ProfileController::class,'delete'])->name('user.delete');
          Route::get('{id}/edit',[\App\Http\Controllers\ProfileController::class,'edit'])->name('user.edit');
          Route::post('/edit',[\App\Http\Controllers\ProfileController::class,'update'])->name('user.update');
          Route::get('{id}/detail',[\App\Http\Controllers\ProductController::class,'detail'])->name('user.detail');
      });
    });
});


   Route::prefix('/shop')->group(function (){
       Route::get('/home',[\App\Http\Controllers\ShopController::class,'index'])->name('shop.home');
       Route::get('{id}/product-detail',[\App\Http\Controllers\ShopController::class,'productDetail'])->name('product.detail');
       Route::get('{id}/product/',[\App\Http\Controllers\ShopController::class,'searchProductByCategory'])->name('product.category');
       Route::get('/logout',[\App\Http\Controllers\ShopController::class,'logout'])->name('shop.logout');
       Route::get('/user',[\App\Http\Controllers\ShopController::class,'showUserProfile'])->name('user.profile');
       Route::post('/user',[\App\Http\Controllers\ShopController::class,'updateProfile'])->name('user.update');
       Route::get('/user/password',[\App\Http\Controllers\ShopController::class,'updatePasswordForm'])->name('password.formUpdate');
       Route::post('/user/password',[\App\Http\Controllers\ShopController::class,'updatePassword'])->name('password.update');
       Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('shop.cart');
       Route::post('/search',[\App\Http\Controllers\ShopController::class,'search'])->name('search.product');
   });

   Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
   Route::post('/login',[\App\Http\Controllers\AuthController::class,'checkLogin'])->name('user.login');
   Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
   Route::get('/register',[\App\Http\Controllers\AuthController::class,'showFormRegister'])->name('register.form');
   Route::post('/register',[\App\Http\Controllers\AuthController::class,'registerUser'])->name('user.register');
