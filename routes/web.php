<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderContributionController;
use App\Http\Controllers\StoreController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PriceTierController;
use App\Http\Controllers\StatusController;



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


Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');

Route::get('/shop', function () {
    return view('shop');
});


// Route::middleware(['Role:admin'])->group(function () {
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('admin.order.create');
Route::post('/orders', [OrderController::class, 'store'])->name('admin.order.store');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('admin.order.show');
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('admin.order.update');
Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('admin.order.destroy');

Route::get('/OrderContribution', [OrderContributionController::class, 'index']);
Route::post('/OrderContribution', [OrderContributionController::class, 'store'])->name('admin.OrderContribution.store');
Route::get('/OrderContribution/{id}', [OrderContributionController::class, 'show'])->name('admin.OrderContribution.show');
Route::get('/OrderContribution/create/{order_id}', [OrderContributionController::class, 'create'])->name('admin.OrderContribution.create');

Route::get('/OrderContribution/edit/{id}', [OrderContributionController::class, 'edit'])->name('admin.OrderContribution.edit');
Route::put('/OrderContribution/{id}', [OrderContributionController::class, 'update'])->name('admin.OrderContribution.update');
Route::delete('/OrderContribution/{id}', [OrderContributionController::class, 'destroy'])->name('admin.OrderContribution.destroy');





Route::get('/store', [StoreController::class, 'index'])->name('stores.index');
Route::get('/store/create', [StoreController::class, 'create'])->name('store.create'); // إضافة مسار "create"
Route::post('/store', [StoreController::class, 'store'])->name('store.store');
Route::get('/store/{id}', [StoreController::class, 'show'])->name('store.show');
Route::get('/store/{id}/edit', [StoreController::class, 'edit'])->name('store.edit'); // إضافة مسار "edit"
Route::put('/store/{id}', [StoreController::class, 'update'])->name('store.update');
Route::delete('/store/{id}', [StoreController::class, 'destroy'])->name('store.destroy');



// Route for the Admin dashboard
Route::get('/dashboard', function () {
    return view('Admin.dashboard');
})->name('dashboard');


Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

// Route for showing the form to create a new user
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');

// Route for storing a new user
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');

// Route for showing a specific user
Route::get('/admin/users/{id}', [UserController::class, 'show'])->name('admin.users.show');

// Route for showing the form to edit an existing user
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

// Route for updating an existing user
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

// Route for deleting a user
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');



// Route::post('/login', function (Request $request) {
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         return redirect()->intended('/dashboard');
//     }

//     return redirect()->back()->with('error', 'Invalid credentials');
// })->name('login');

// });
// });

Route::get('/', function () {
    return view('index');
})->name('home');


//home,login and signup
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register.view');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.view');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// });
Route::prefix('dashboard/products')->name('admin.products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
//////////////////////////////////////////
/////////////////////////
/////////////////
/////////
/////

Route::get('/', function () {
    return view('index');
})->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    // Ensure that all routes are properly closed within the group
});

//admin dashboard

Route::resource('price_tiers', PriceTierController::class);
Route::resource('statuses', StatusController::class);
