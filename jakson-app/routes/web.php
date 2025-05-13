<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

//Route::resource('employees', EmployeeController::class)->middleware('custom.auth');














Route::get('department', [DepartmentController::class, 'index']);



Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

//Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Route::resource('employees', EmployeeController::class);
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
//     Route::resource('employees', EmployeeController::class);
// });


// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/employees/create', [EmployeeController::class, 'create']);
//     Route::post('/employees', [EmployeeController::class, 'store']);
//     Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);
//     Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
//     Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);
// });


Route::middleware(['auth'])->group(function () {
    // Dashboard accessible to all authenticated users
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Employees routes
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
   // Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
    
    // Admin-only routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
        Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
        Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
        Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
        Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    });
});


