<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobtitleController;
use App\Http\Controllers\LegaloffController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TimekeeppingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::resource('/admin', AdminController::class);
Route::resource('/jobTitle', JobtitleController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('/level', LevelController::class);
Route::resource('/timekeeping', TimekeeppingController::class);
Route::resource('/legalOff', LegaloffController::class);
Route::resource('/employee', EmployeeController::class);
///login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    ->name('login-process');

    // testRoute::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    // ->name('login-process');
