<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//navs
Route::get('/', function () {
    return view('welcome');
});
Route::get("/about", function () {
    return view("about");
});
Route::get("/contact", function () {
    return view("contact");
});

Route::fallback(function () {
    return response()->view('/global/error', [], 404);
});
Route::get('/error', function () {
    return view('/global/error');
});

//auth routes
Route::get("/login", function () {
    return view("auth/login");
});
Route::get("/register", function () {
    return view("auth/register");
});
Route::post('/register-user', [UserController::class, "register"]);
Route::post('/login-data', [UserController::class, "login"]);
Route::get('/home', [HomeController::class, "dashboard"]);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [UserController::class, "profileBoard"]);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/edit-profile', [UserController::class, 'editProfile']);
    Route::post('/update-profile', [UserController::class, 'updateProfile']);


    //task route
    Route::get('/tasks', [NavController::class, 'taskNav']);

    //employer routes
    Route::prefix('employer')->group(function () {
        Route::get('/dashboard', function () {
            return view('/dashboard/employer/employer');
        });
        Route::get("/task",[TaskController::class,'authTaskDetails']);
        Route::get('/add-task', function () {
            return view('/dashboard/employer/task/addtask');
        });
        Route::post('/create-task', [TaskController::class, 'addTask']);
        Route::get('/task/edit/{id}',[TaskController::class, 'editTask']);
        Route::get('/task/{id}',[TaskController::class, 'getTaskDetails']);
        Route::post('/update-task',[TaskController::class, 'updateTask']);
        Route::delete('/task/delete/{id}',[TaskController::class, 'deleteTask']);

    });

    //employee routes
    Route::prefix('employee')->group(function () {
        Route::get('/dashboard', function () {
            return view("/dashboard/employee/employee");
        });

        Route::get("/task",[TaskController::class,'authTaskDetails']);
    });
});