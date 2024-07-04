<?php

use App\Http\Controllers\CustomProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);


// Custom
Route::prefix("custom")->group(function(){
    Route::get("/",[CustomProductController::class,'index']);
    Route::get("/create/kain",[CustomProductController::class,'kain']);
    Route::post("/create/kain",[CustomProductController::class,'post_kain']);
    Route::get("/create/lengan",[CustomProductController::class,'lengan']);
    Route::post("/create/lengan",[CustomProductController::class,'post_lengan']);
    Route::get("/create/model",[CustomProductController::class,'model']);
    Route::post("/create/model",[CustomProductController::class,'post_model']);
    Route::get("/create/penerapan-kain",[CustomProductController::class,'penerapan_kain']);
    Route::post("/create/penerapan-kain",[CustomProductController::class,'post_penerapan_kain']);
    Route::get("/result",[CustomProductController::class,'result']);
});

// Custom
Route::prefix("dashboard")->group(function(){
    Route::get("/",[DashboardController::class,'index']);
    Route::get("/product",[DashboardController::class,'product']);
    Route::get("/product/create",[DashboardController::class,'createProduct']);
    Route::post("/product/create",[DashboardController::class,'storeProduct']);
    Route::get('/product/edit/{id}', [DashboardController::class,'editProduct'])->name('product.edit');
    Route::put('/product/edit/{id}', [DashboardController::class,'updateProduct'])->name('product.update');
    Route::delete('/product/delete/{id}', [DashboardController::class,'deleteProduct'])->name('product.delete');

    Route::get("/order",[DashboardController::class,'order']);
});



