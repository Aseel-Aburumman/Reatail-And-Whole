<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderContributionController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});



Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

Route::get('/ordersItem', [OrderItemController::class, 'index']);
Route::post('/ordersItem', [OrderItemController::class, 'store']);
Route::get('/ordersItem/{id}', [OrderItemController::class, 'show']);
Route::put('/ordersItem/{id}', [OrderItemController::class, 'update']);
Route::delete('/ordersItem/{id}', [OrderItemController::class, 'destroy']);

Route::get('/OrderContribution', [OrderContributionController::class, 'index']);
Route::post('/OrderContribution', [OrderContributionController::class, 'store']);
Route::get('/OrderContribution/{id}', [OrderContributionController::class, 'show']);
Route::put('/OrderContribution/{id}', [OrderContributionController::class, 'update']);
Route::delete('/OrderContribution/{id}', [OrderContributionController::class, 'destroy']);
//////////////////////////////////////////
/////////////////////////
/////////////////
/////////
/////
//home,login and signup
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register.view');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.view');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('home');

