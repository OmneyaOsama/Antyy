<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
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

Route::get('/',[HomeController::class,'home']);

Route::get("login",[LoginController::class,'login']);

Route::post('login',[LoginController::class,'handleLogin'] );

Route::get("register",[RegisterController::class,'register']);

Route::post('handleRegister',[RegisterController::class,'handleRegister'] );

Route::get('logout',[LoginController::class,'logout'] );
Route::get('contact',[UserController::class,'contact']);

Route::post('handleContact',[UserController::class,'handleContact']);
Route::get('about',[UserController::class,'about']);

Route::get('/',[HomeController::class,'displayLatest']);
Route::get('/',[HomeController::class,'displayCategory']);
Route::get('/{category}',[HomeController::class,'showProducts']);


Route::get('/products/display',[UserController::class,'display']);

Route::get('/cart/checkout',[UserController::class,'checkout']);

Route::get('/cart/create/{id}',[CartController::class,'create']);

Route::post('/cart/create/{id}',[CartController::class,'create']);
Route::get('/display/cart',[CartController::class,'index']);
Route::get("/carts/delete/{id}" ,[CartController::class , 'delete']);



Route::middleware(['isAdmin'])->group(function () {
    Route::get("dashboard",[AdminController::class,'index']);
    Route::get("dashboard/users",[AdminController::class,'users']);
    Route::get("/users/{id}",[AdminController::class,'userDetails']);
    Route::get("/users/delete/{id}" ,[AdminController::class , 'deleteUser']);

    Route::get("dashboard/products",[ProductController::class,'products']);
    Route::get("/products/addProduct",[ProductController::class,'addProduct']);
    Route::post("/products/addProduct",[ProductController::class,'store']);
    Route::get("/products/delete/{id}",[ProductController::class,'delete']);

    Route::get("dashboard/categories",[CategoryController::class,'categories']);
    Route::get("/categories/addCategory",[CategoryController::class,'addCategory']);
    Route::post("/categories/addCategory",[CategoryController::class,'store']);
    Route::get("/categories/delete/{id}" ,[CategoryController::class , 'delete']);
    Route::get('categories/edit/{id}',[CategoryController::class,'edit'] );
    Route::post('categories/update/{id}',[CategoryController::class,'update'] );



    // Route::get("blogs/create" , [BlogController::class , 'create']);
    // Route::post("blogs/store" , [BlogController::class , 'store']);
    // Route::get("/blog/delete/{id}" ,[BlogController::class , 'delete']);
    // Route::get("/blog/edit/{id}" ,[BlogController::class , 'edit']);
    // Route::post("/blog/update/{id}" ,[BlogController::class , 'update']);

});

