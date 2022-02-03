<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\SamenstellenController;
use App\Models\User;
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

Route::get('/bestellen', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/', function () {
    return view('Homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

//Route::get('/bestellen/{id}', [BestellingController::class, 'show'])->name('bestellen');
//Route::put('/bestellingen/{id}', [BestellingController::class, 'update'])->name('bestellingen.update');

//Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');
//Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.details');
//Route::get('/pizzas/{id}/samenstellen', [SamenstellenController::class, 'index'])->name('pizzas.samenstellen');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
    Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');

    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('pizza', PizzaController::class);

});


require __DIR__.'/auth.php';
