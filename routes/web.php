<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BikeController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Frontend\BookingController as FrontBookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\ServiceController as FrontServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\ProfileController;
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
    Route::get('/',[SiteController::class,'home'])->name('home');
    Route::get('/our-service',[FrontServiceController::class,'service'])->name('service');
    Route::get('/about',[SiteController::class,'about'])->name('about');
    Route::get('/booking/{id}',[FrontBookingController::class,'booking'])->name('booking');



    Route::group(['middleware'=> 'auth'],function(){

    Route::get('/logout',[FrontUserController::class,'logout'])->name('logout');
    Route::post('/book',[FrontBookingController::class,'book'])->name('book');

    //User Profile
    Route::get('/user/profile',[ProfileController::class,'profile'])->name('user.profile');
    Route::get('/user/profile/edit/{id}',[ProfileController::class,'editProfile'])->name('user.profile.edit');
    Route::put('/user/profile/update/{id}',[ProfileController::class,'updateProfile'])->name('user.profile.update');
    Route::get('/user/booking/records',[ProfileController::class,'bookingRecord'])->name('user.profile.booking_records');
    Route::get('/user/update-password',[ProfileController::class,'passwordShowForm'])->name('user.edit.password');
    Route::post('/user/update-password',[ProfileController::class,'updatePassword'])->name('user.update.password');




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

    });


    Route::prefix('/booking')->name('booking.')->group(function(){
        Route::get('/list',[BookingController::class,'index'])->name('list');
        Route::get('/edit/{id}',[BookingController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[BookingController::class,'update'])->name('update');
        Route::get('/{id}/{status}',[BookingController::class,'updateStatus'])->name('status');


    });

    Route::prefix('/payment')->name('payment.')->group(function(){
        Route::get('/show/{id}',[PaymentController::class,'paymentShow'])->name('show');
        Route::get('/form/{id}',[PaymentController::class,'paymentForm'])->name('form');
        Route::post('/create',[PaymentController::class,'paymentCreate'])->name('create');

    });




    Route::prefix('/service')->name('service.')->group(function(){
        Route::get('/list',[ServiceController::class,'index'])->name('list');
        Route::get('/create',[ServiceController::class,'create'])->name('create');
        Route::post('/store',[ServiceController::class,'store'])->name('store');
        Route::delete('/delete/{id}',[ServiceController::class,'delete'])->name('delete');

    });

    Route::prefix('/service')->name('service.')->group(function(){
        Route::get('/list',[ServiceController::class,'index'])->name('list');
        Route::get('/create',[ServiceController::class,'create'])->name('create');
        Route::post('/store',[ServiceController::class,'store'])->name('store');
        Route::delete('/delete/{id}',[ServiceController::class,'delete'])->name('delete');

    });


    });




    });
