<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Authh\LoginController;
use App\Http\Controllers\Auth\Login1Controller;
use App\Http\Controllers\Auth\Register1Controller;
// routes/web.php
use App\Http\Controllers\AboutUsController;
// categories
use App\Http\Controllers\CategoryController;
// routes/web.php

Route::get('/categories', function () {
    // Data untuk contoh, bisa digantikan dengan data dari database
    $categories = [
        ['name' => 'Metals', 'description' => 'Information about metals.', 'image' => 'metals.jpg'],
        ['name' => 'Polymers', 'description' => 'Information about polymers.', 'image' => 'polymers.jpg'],
        ['name' => 'Ceramics', 'description' => 'Information about ceramics.', 'image' => 'ceramics.jpg'],
        ['name' => 'Composites', 'description' => 'Information about composites.', 'image' => 'composites.jpg'],
    ];

    return view('categories', compact('categories'));
})->name('categories.index');

// routes/web.php

Route::get('/about-us', function () {
    return view('about');
})->name('about-us');

Route::get('/login1', [Login1Controller::class, 'showLoginForm'])->name('login1.form');
Route::post('/login1', [Login1Controller::class, 'login'])->name('login1');

Route::post('/logout', [Login1Controller::class, 'logout'])->name('logout');

Route::get('/register1', [Register1Controller::class, 'showRegistrationForm'])->name('register1.form');
Route::post('/register1', [Register1Controller::class, 'register'])->name('register1');

/*BARUUUU NIII
// routes/web.php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frontend', 'FrontendController@index')->name('frontend.index'); // Contoh route untuk halaman frontend.blade.php

// Tambahkan route untuk proses login dan register
Route::post('/login', 'AuthController@login')->name('login1');
Route::get('/register', 'AuthController@showRegisterForm')->name('register1.form'); // Jika Anda memiliki metode untuk menampilkan form register
*/
Route::get('/login1', [Login1Controller::class, 'showLoginForm'])->name('login1.form');
Route::get('/register1', [Register1Controller::class, 'showRegistrationForm'])->name('register1.form');

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact', [ContactController::class, 'index'])->name('layouts.contact');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/tag/{slug?}', [\App\Http\Controllers\ShopController::class, 'tag'])->name('shop.tag');
Route::get('/product/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

// react route
Route::get('products/{slug?}', [\App\Http\Controllers\ShopController::class, 'getProducts']);
Route::get('products', [\App\Http\Controllers\HomeController::class, 'getProducts']);
Route::get('product-detail/{product:slug}', [\App\Http\Controllers\ProductController::class, 'getProductDetail']);
Route::post('carts', [\App\Http\Controllers\CartController::class, 'store']);
Route::get('carts', [\App\Http\Controllers\CartController::class, 'showCart']);
Route::resource('/cart', \App\Http\Controllers\CartController::class);

// ongkir
Route::get('api/provinces', [\App\Http\Controllers\OngkirController::class, 'getProvinces']);
Route::get('api/cities', [\App\Http\Controllers\OngkirController::class, 'cities']);
Route::get('api/shipping-cost', [\App\Http\Controllers\OngkirController::class, 'shippingCost']);
Route::post('api/set-shipping', [\App\Http\Controllers\OngkirController::class, 'setShipping']);
Route::post('api/checkout', [\App\Http\Controllers\OrderController::class, 'checkout']);
// get user login
Route::get('api/users', [\App\Http\Controllers\UserController::class, 'index']);
// ==========


Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/order/checkout', [\App\Http\Controllers\OrderController::class, 'process'])->name('checkout.process');
    Route::resource('/cart', \App\Http\Controllers\CartController::class)->except(['store', 'show']);


    Route::group(['middleware' => ['isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
       
        // categories
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::post('categories/images', [\App\Http\Controllers\Admin\CategoryController::class,'storeImage'])->name('categories.storeImage');

        
    
        // tags
        Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
    
        // products
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::post('products/images', [\App\Http\Controllers\Admin\ProductController::class,'storeImage'])->name('products.storeImage');
        Route::get('/admin', [App\Http\Controller\Admin\DashboardController::class, 'index'])->name('dashboard');   
        
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
