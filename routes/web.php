<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BackEndController;
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



Route::get('/', [FrontEndController::class,'index']);

//backend
Route::get('/dashboard', [BackEndController::class,'dashboard'])->middleware('auth');

//component
Route::get('/dashboard/form', [BackEndController::class,'form'])->middleware('auth');
Route::get('/dashboard/invoice', [BackEndController::class,'invoice'])->middleware('auth');
Route::get('/dashboard/table', [BackEndController::class,'table'])->middleware('auth');
Route::get('/dashboard/blank', [BackEndController::class,'blank'])->middleware('auth');
Route::get('/dashboard/login', [BackEndController::class,'login'])->middleware('auth');
Route::get('/dashboard/register', [BackEndController::class,'register'])->middleware('auth');
Route::get('/dashboard/modal', [BackEndController::class,'modal'])->middleware('auth');


//authentication
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
