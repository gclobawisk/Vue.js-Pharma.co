<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\LoginController;
use App\http\Controllers\AuthController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\RegisterController;
use App\http\Controllers\UsersController;

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


Route::get('/', [LoginController::class, 'index']); 
Route::get('/login', [LoginController::class, 'index']); 
Route::get('/cadastro', [RegisterController::class, 'index']); 
Route::get('/logout', [LoginController::class, 'logout']); 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/users', [UsersController::class, 'getUsers']);


Route::post('/auth', [AuthController::class, 'auth']);
//Route::post('/register', [RegisterController::class, 'store']);

