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

Route::get('/',[UserController::class,'homepage'])->name('homepage');
Route::get('/search',[UserController::class,'searchmed'])->name('searchmed');
Route::get('/doctors_info',[UserController::class,'doctors_info'])->name('doctors_info');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/login/post',[UserController::class,'login_post'])->name('login_post');

Route::get('/master',[UserController::class,'master'])->name('master');
Route::get('/registration',[UserController::class,'registration'])->name('registration');
Route::post ('/create/user',[UserController::class,'register'])->name('register');

Route::get('/details/{id}',[UserController::class,'details'])->name('details');
Route::get('/invoice',[UserController::class,'invoice'])->name('invoice');

Route::get('/userdashboard',[UserController::class,'userdashboard'])->name('userdashboard');
Route::get('/edituser/{id}',[UserController::class,'edituser'])->name('edituser');
Route::put('/updateuser/{id}',[UserController::class,'updateuser'])->name('updateuser');


Route::get('/master',[AdminController::class,'master'])->name('master');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/product',[AdminController::class,'product'])->name('product');

Route::get('/add_medicine',[AdminController::class,'add_medicine'])->name('add_medicine');
Route::post('/create/medicine',[AdminController::class,'medicines'])->name('medicines');
Route::get('/editmed/{id}',[AdminController::class,'editmed'])->name('editmed');
Route::put('/updatemed/{id}',[AdminController::class,'updatemed'])->name('updatemed');
Route::get('/deletemed/{id}',[AdminController::class,'deletemed'])->name('deletemed');

Route::get('/adminprofile',[AdminController::class,'adminprofile'])->name('adminprofile');
Route::get('/editadmin/{id}',[AdminController::class,'editadmin'])->name('editadmin');
Route::put('/updateadmin/{id}',[AdminController::class,'updateadmin'])->name('updateadmin');

Route::get('/order',[AdminController::class,'order'])->name('order');
Route::get('/sub_order/{id}',[AdminController::class,'sub_order'])->name('sub_order');


Route::get('/supplier',[AdminController::class,'supplier'])->name('supplier');
Route::post('/create/supplier',[AdminController::class,'suppliers'])->name('suppliers');
Route::get('/delete_supplier/{id}',[AdminController::class,'delete_supplier'])->name('delete_supplier');

Route::get('/doctor',[AdminController::class,'doctor'])->name('doctor');
Route::post('/create/doctor',[AdminController::class,'doctors'])->name('doctors');
Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor'])->name('delete_doctor');

Route::get('/customer',[AdminController::class,'customer'])->name('customer');

// cart route
Route::get('/cart',[UserController::class,'cart'])->name('cart');
Route::get('/addtocart/{id}',[UserController::class,'addtocart'])->name('addtocart');
Route::post('/cart/order',[UserController::class,'order'])->name('cart_order');
Route::get('/deleteodr/{id}',[UserController::class,'deleteodr'])->name('deleteodr');