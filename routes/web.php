<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('index');
});
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
Route::get('/login', function () {
    return view('login');
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

// Route for the Admin dashboard
Route::get('/dashboard', function () {
    return view('Admin.dashboard');
})->name('dashboard');


// Route for listing users
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
//////////////////////////////////////////
/////////////////////////
/////////////////
/////////
/////
