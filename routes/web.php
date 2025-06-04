<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\Product\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Ruangan\RuanganController;
use App\Http\Controllers\Student\StudentController;

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



Route::get('/', [FrontEndController::class, 'index']);

//backend
Route::get('/dashboard', [BackEndController::class, 'dashboard'])->middleware('auth');


//people

//student
Route::get('/dashboard/student', [StudentController::class, 'index'])->middleware('auth')->name('student');
Route::get('/dashboard/student/add', [StudentController::class, 'form'])->middleware('auth');
Route::post('/dashboard/student/add', [StudentController::class, 'store'])->name('student.store');

//employee
Route::get('/dashboard/employee', [EmployeeController::class, 'index'])->middleware('auth')->name('employee');
Route::get('/dashboard/employee/add', [EmployeeController::class, 'form'])->middleware('auth');
Route::post('/dashboard/employee/add', [EmployeeController::class, 'store'])->name('employee.store');


//room manajenent
Route::get('/dashboard/room', [RuanganController::class, 'index'])->middleware('auth')->name('room');
Route::get('/dashboard/room/add', [RuanganController::class, 'form'])->middleware('auth')->name('room.add');
Route::post('/dashboard/room/add', [RuanganController::class, 'store'])->name('room.store');
Route::get('/dashboard/room/chooseEmployee', [RuanganController::class, 'viewEmployeeToRoom'])->name('employeeToRoom.add');
Route::post('/dashboard/room/chooseEmployee', [RuanganController::class, 'EmployeeToRoom'])->name('employeeToRoom.store');


//component
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BackEndController::class, 'dashboard']);
    Route::get('/dashboard/form', [BackEndController::class, 'form']);
    Route::get('/dashboard/invoice', [BackEndController::class, 'invoice']);
    Route::get('/dashboard/table', [BackEndController::class, 'table']);
    Route::get('/dashboard/blank', [BackEndController::class, 'blank']);
    Route::get('/dashboard/login', [BackEndController::class, 'login']);
    Route::get('/dashboard/register', [BackEndController::class, 'register']);
    Route::get('/dashboard/modal', [BackEndController::class, 'modal']);
});



//authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(
    function () {
        Route::get('/dashboard/product', [ProductController::class, 'index'])->name('product');
        Route::get('/dashboard/product/add', [ProductController::class, 'form'])->name('product.add');
        Route::post('/dashboard/product/add', [ProductController::class, 'store'])->name('product.store');
        Route::get('/dashboard/product/queue', [ProductController::class, 'queue'])->name('queue');
        Route::get('/dashboard/product/queue/history', [ProductController::class, 'history'])->name('queue.history');
        Route::get('/dashboard/product/queue/{id}/progress', [OrderController::class, 'order_progress'])->name('queue.1');
        Route::get('/dashboard/product/queue/{id}/complete', [OrderController::class, 'order_complete'])->name('queue.2');
        Route::get('/dashboard/product/queue/{id}/decline' , [OrderController::class, 'order_decline'])->name('queue.3');
        Route::get('/dashboard/product/queue/history/export', [ExportController::class, 'exportEmployee'])->name('history.export.employee');
    }
);

Route::middleware(['auth'])->group(
    function () {
        Route::get('/dashboard/order', [OrderController::class, 'index'])->name('order');
        Route::post('/dashboard/order', [OrderController::class, 'order'])->name('order.process');
        Route::get('/dashboard/order/history', [OrderController::class, 'history'])->name('history');
        Route::get('/dashboard/order/history/export', [ExportController::class, 'exportStudent'])->name('history.export.student');
        // Route::get('/dashboard/order/add', [ProductController::class, 'form'])->name('product.add');
    }
);
