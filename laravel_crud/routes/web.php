<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;

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

 //product
 Route::get('/test',[ProductController::class,'test']  )->name('test');

Route::get('/index',[ProductController::class,'index'] )->name('products.index');
Route::get('/create',[ProductController::class,'create']  )->name('create');
Route::post('store/',[ProductController::class,'store']  )->name('store');
Route::get('show/{product}',[ProductController::class,'show']  )->name('show');
Route::get('edit/{product}',[ProductController::class,'edit']  )->name('edit');
Route::put('edit/{product}',[ProductController::class,'update'] )-> name('update');
Route::delete('/{product}',[ProductController::class,'destroy'] )-> name('destroy');
//login
Route::get('/', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
