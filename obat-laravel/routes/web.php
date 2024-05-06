<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\UserControllers;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// ------------------ FITUR WAJIB LOGIN ------------------
Route::middleware(['auth'])->group(function(){
    // ---------------------CARTS ---------------------
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/{id}', [CartController::class, 'store']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::get('/cart/{id}' , [CartController::class, 'destroy']);
     // ---------------------CHECKOUT ---------------------
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    // ---------------------MY ORDER ---------------------
    Route::get('my-orders', [UserControllers::class, 'index']);
    Route::get('view-order/{id}', [UserControllers::class, 'view']);
});


// ------------------ LAMAN UTAMA ------------------
Route::get('/', [FrontendController::class,'index'])->name('home1');
Route::get('/category/{category_slug}', [FrontendController::class, 'viewCategoryPost']);
Route::get('/category/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost']);
Route::get('product-list', [FrontendController::class,'productlistajax']);
Route::post('searchproduct', [FrontendController::class,'searchproductajax']);

// ------------------ ADMIN ONLY ------------------
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard' , [DashboardController::class, 'index']);
    
    // ---------------------CATEGORIES ---------------------
    Route::get('/category' , [CategoryController::class, 'index']);
    // create
    Route::get('/add-category' , [CategoryController::class, 'create']);
    Route::post('/add-category' , [CategoryController::class, 'store']);
    // update
    Route::get('/edit-category/{category_id}' , [CategoryController::class, 'edit']);
    Route::put('/update-category/{category_id}' , [CategoryController::class, 'update']);
    //delete
    // Route::get('/delete-category/{category_id}' , [CategoryController::class, 'destroy']);
    Route::post('/delete-category' , [CategoryController::class, 'destroy']);

    // ---------------------POSTS ---------------------
    Route::get('/posts' , [PostController::class, 'index']);
    //create
    Route::get('/add-post' , [PostController::class, 'create']);
    Route::post('/add-post' , [PostController::class, 'store']);

    // update
    Route::get('/edit-post/{post_id}' , [PostController::class, 'edit']);
    Route::put('/update-post/{post_id}' , [PostController::class, 'update']);
    //delete
    Route::get('/delete-post/{post_id}' , [PostController::class, 'destroy']);
    
    
    // ---------------------USERS ---------------------
    Route::get('/users' , [UserController::class,'index']);
    Route::get('/users/{user_id}' , [UserController::class,'edit']);
    Route::put('/update-user/{user_id}' , [UserController::class,'update']);

     // ---------------------ORDER ---------------------
    Route::get('orders' , [OrderController::class,'index']);
    Route::get('view-order/{id}' , [OrderController::class,'view']);
    Route::put('update-order/{id}' , [OrderController::class,'updateorder']);
    Route::get('history-order' , [OrderController::class,'historyorder']);
    Route::get('/delete-order/{id}' , [OrderController::class, 'destroy']);


});