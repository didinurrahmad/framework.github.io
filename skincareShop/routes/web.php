<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
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

Route::get('/', function () {
    return view('home',[

       'customers' => Customer::all()
    ]);
})->middleware(['auth']);

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::post('/action-register',
[AuthController::class, 'actionRegister']);

Route::post('/action-login',
[AuthController::class, 'actionLogin']);

Route::get('/login', [AuthController::class,
'loginView'])->name("login");

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');

Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store')->middleware('auth');
