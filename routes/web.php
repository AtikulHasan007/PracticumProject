<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BikeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\ServiceController as FrontServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\UserController as FrontUserController;
use App\Http\Controllers\Frontend\SiteController;
use App\Models\Product;
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

Route::prefix('/')->name('motors.')->group(function(){
    Route::get('/registration-form',[FrontUserController::class,'ShowRegisterFrom'])->name('registrationform');
    Route::post('/registration',[FrontUserController::class,'Registration'])->name('registration');

    Route::get('/login-form',[FrontUserController::class,'loginFrom'])->name('loginform');
    Route::post('/login',[FrontUserController::class,'login'])->name('login');

    
    Route::group(['middleware'=> 'user-auth'],function(){

    Route::get('/logout',[FrontUserController::class,'logout'])->name('logout');
    Route::get('/',[SiteController::class,'home'])->name('home');
    Route::get('/about',[SiteController::class,'about'])->name('about');
    Route::get('/our-service',[FrontServiceController::class,'service'])->name('service');

});
});


Route::prefix('admin')->name('admin.')->group(function (){

    Route::get('/login',[UserController::class,'loginForm'])->name('loginForm');
    Route::post('/doLogin',[UserController::class,'doLogin'])->name('doLogin');

 //after 6th stste, it is the a1
    Route::group(['middleware'=> 'admin-auth'],function(){

        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');


    Route::prefix('/bike')->name('bike.')->group(function(){
        Route::get('/list',[BikeController::class,'index'])->name('list');
        Route::get('/create',[BikeController::class,'create'])->name('create');
        Route::post('/store',[BikeController::class,'store'])->name('store');
        Route::get('/view/{id}',[BikeController::class,'view'])->name('view');
        Route::get('/edit/{id}',[BikeController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[BikeController::class,'update'])->name('update');
        Route::delete('/delete/{id}',[BikeController::class,'delete'])->name('delete');
        

    });

    Route::prefix('/customer')->name('customer.')->group(function(){
        Route::get('/list',[CustomerController::class,'index'])->name('list');
        Route::post('/create',[CustomerController::class,'create'])->name('create');
    });

    Route::prefix('/service')->name('service.')->group(function(){
        Route::get('/list',[ServiceController::class,'index'])->name('list');
        Route::post('/create',[ServiceController::class,'create'])->name('create');

    });

    Route::get('/category/list',[CategoryController::class,'index'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

    Route::get('/product/list',[ProductController::class,'index'])->name('product.list');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

    Route::get('/employee/list',[EmployeeController::class,'index'])->name('employee.list');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('employee/store',[EmployeeController::class,'store'])->name('employee.store');



    });

    
});