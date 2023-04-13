<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginStatus;
use App\Http\Controllers\AuthController;

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
// Homepage URL
Route::get('/', function () {
    return view('home');
});

// Middleware to check if user is logged in already 
Route::middleware([loginstatus::class])->group(function(){
    // Login page URL
    Route::get('/login', function () {
        return view('login');
    });
    // Register/SignUp page URL
    Route::get('/register', function () {
        return view('register');
    });
    // Link action to validate and save new user
    Route::post('/save_user', [AuthController::class, 'registerUser'])->name("save_user");
 
});
