<?php
use App\Http\Controllers\ProductController;

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



//home,login and signup
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register.view');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.view');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('home');

