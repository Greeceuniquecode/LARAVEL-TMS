<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/about", function(){
    return view("about");
});
Route::get("/contact",function(){
    return view("contact");
});
Route::get('/home',function(){
    return view('home');
});

//auth routes
Route::get("/login",function(){
    return view("auth/login");
});
Route::get("/register",function(){
    return view("auth/register");
});
Route::post('/register-data',[UserController::class,"register"]);
Route::post('/login-data',[UserController::class,"login"]);
Route::get('/profile',[UserController::class,"profileBoard"]);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/edit-profile',[UserController::class,'editProfile']);
Route::post('/update-profile',[UserController::class,'updateProfile']);


//dashboard route
Route::get('/dashboard',function(){
    return view("/dashboard/employee/employee");
});
Route::get('/edashboard',function(){
    return view('/dashboard/employer/employer');
});

Route::get('/home',[HomeController::class,"dashboard"]);

