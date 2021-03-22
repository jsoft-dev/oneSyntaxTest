<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Routes for department

Route::get('/departments',[DepartmentController::class,'index']);

Route::get('/departments/create', [DepartmentController::class,'create']);

Route::post('/departments', [DepartmentController::class,'store']);

Route::get('/departments/{department}', [DepartmentController::class,'show']);

Route::get('/departments/{department}/edit', [DepartmentController::class,'edit']);

Route::put('/departments/{department}', [DepartmentController::class,'update']);

Route::delete('/departments/{department}', [DepartmentController::class,'destroy']);

// Routes for country

Route::get('/countries',[CountryController::class,'index']);

Route::get('/countries/create', [CountryController::class,'create']);

Route::post('/countries', [CountryController::class,'store']);

Route::get('/countries/{country}', [CountryController::class,'show']);

Route::get('/countries/{country}/edit', [CountryController::class,'edit']);

Route::put('/countries/{country}', [CountryController::class,'update']);

Route::delete('/countries/{country}', [CountryController::class,'destroy']);

// Routes for State

Route::get('/states',[StateController::class,'index']);

Route::get('/states/create', [StateController::class,'create']);

Route::post('/states', [StateController::class,'store']);

Route::get('/states/{state}', [StateController::class,'show']);

Route::get('/states/{state}/edit', [StateController::class,'edit']);

Route::put('/states/{state}', [StateController::class,'update']);

Route::delete('/states/{state}', [StateController::class,'destroy']);

// Routes for cities

Route::get('/cities',[CityController::class,'index']);

Route::get('/cities/create', [CityController::class,'create']);

Route::post('/cities', [CityController::class,'store']);

Route::get('/cities/{city}', [CityController::class,'show']);

Route::get('/cities/{city}/edit', [CityController::class,'edit']);

Route::put('/cities/{city}', [CityController::class,'update']);

Route::delete('/cities/{city}', [CityController::class,'destroy']);

// Routes for employees

Route::get('/employees',[EmployeeController::class,'index']);

Route::get('/employees/create', [EmployeeController::class,'create']);

Route::post('/employees', [EmployeeController::class,'store']);

Route::get('/employees/{employee}', [EmployeeController::class,'show']);

Route::get('/employees/{employee}/edit', [EmployeeController::class,'edit']);

Route::put('/employees/{employee}', [EmployeeController::class,'update']);

Route::delete('/employees/{employee}', [EmployeeController::class,'destroy']);

// Routes for users

Route::get('/users',[UserController::class,'index']);

Route::get('/users/create', [UserController::class,'create']);

Route::post('/users', [UserController::class,'store']);

Route::get('/users/{user}', [UserController::class,'show']);

Route::get('/users/{user}/edit', [UserController::class,'edit']);

Route::put('/users/{user}', [UserController::class,'update']);

Route::delete('/users/{user}', [UserController::class,'destroy']);










