<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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
//index for Customer
Route::get('/', [CustomerController::class, 'index'])->middleware('auth');

//register for Customer
Route::get('/register',[UserController::class,'register']);
Route::post('/store',[UserController::class,'store']);

//Login for Customer
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process',[UserController::class,'process']);

//Log out for Customer
Route::get('/logout',[UserController::class,'logout']);

//delete for Customer
Route::get('/delete/{id}',[CustomerController::class,'delete'])->middleware('auth');

//Add for Customer
Route::get('/addUser',[CustomerController::class,'addUser']);
Route::post('/save',[CustomerController::class,'save']);

//edit and update for Customer
Route::get('/editUser/{id}',[CustomerController::class,'editUser'])->middleware('auth');
Route::post('/updateUser',[CustomerController::class,'updateUser']);

//index for product
Route::get('/productIndex', [ProductController::class,'index'])->middleware('auth');
//add for product
Route::get('/addProduct',[ProductController::class,'addProduct'])->middleware('auth');
Route::post('/saveProduct',[ProductController::class,'saveProduct']);
//edit for product
Route::get('/editProduct/{id}',[ProductController::class,'editProduct'])->middleware('auth');
Route::post('/updateProduct',[ProductController::class,'updateProduct']);
//delete for product
Route::get('/deleteProduct/{id}',[ProductController::class,'deleteProduct'])->middleware('auth');


