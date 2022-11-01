<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'home'])->name('home');
Route::get('/homepage',[UserController::class,'homepage'])->name('homepage');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login/post',[UserController::class,'login_post'])->name('login_post');

Route::get('/master',[UserController::class,'master'])->name('master');
Route::get('/registration',[UserController::class,'registration'])->name('registration');
Route::post ('/create/user',[UserController::class,'register'])->name('register');

Route::get('/details',[UserController::class,'details'])->name('details');
Route::get('/cart',[UserController::class,'cart'])->name('cart');
Route::get('/invoice',[UserController::class,'invoice'])->name('invoice');


Route::get('/master',[AdminController::class,'master'])->name('master');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/product',[AdminController::class,'product'])->name('product');
Route::get('/category',[AdminController::class,'category'])->name('category');
Route::post ('/create/medicine',[AdminController::class,'medicines'])->name('medicines');

Route::get('/order',[AdminController::class,'order'])->name('order');
Route::get('/sales',[AdminController::class,'sales'])->name('sales');
Route::get('/customer',[AdminController::class,'customer'])->name('customer');
Route::post('/customer',[AdminController::class,'customer'])->name('customer');

