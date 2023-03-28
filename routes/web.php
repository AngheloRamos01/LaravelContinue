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

Route::get('/', [CustomerController::class, 'index'])->middleware('auth');

Route::get('/register',[UserController::class,'register']);
Route::post('/store',[UserController::class,'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process',[UserController::class,'process']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/delete/{id}',[CustomerController::class,'delete'])->middleware('auth');

Route::get('/addUser',[CustomerController::class,'addUser']);
Route::post('/save',[CustomerController::class,'save']);

Route::get('/editUser/{id}',[CustomerController::class,'editUser'])->middleware('auth');
Route::post('/updateUser',[CustomerController::class,'updateUser']);

//index
Route::get('/', [ProductController::class,'index']);
//add
Route::get('/addProduct',[ProductController::class,'addProduct']);
Route::post('/saveProduct',[ProductController::class,'saveProduct']);
//edit
Route::get('/editProduct/{id}',[ProductController::class,'editProduct']);
Route::post('/updateProduct',[ProductController::class,'updateProduct']);
//delete
Route::get('/deleteProduct/{id}',[ProductController::class,'deleteProduct']);


