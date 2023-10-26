<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 


    TO RUN PLEASE USE php artisan serv AND npm run devz
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/employee', [employeeController::class, 'index'])->name('employee');
Route::post('/employee', [EmployeeController::class, 'store']);

Route::get('/show', [employeeController::class, 'show']);
Route::get('/show', [EmployeeController::class, 'show'])->name('employee.show');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
Route::get('/employee/{id}/edit', [employeeController::class, 'edit'])->name('employee.edit');
Route::patch('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');



require __DIR__.'/auth.php';
