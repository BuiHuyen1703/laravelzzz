<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobtitleController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');
Route::get('/employee', function () {
    return view('employee.list');
})->name('employee');


Route::get('/timekeeping', function () {
    return view('timekeeping.list');
})->name('timekeeping');

Route::get('/legal_off', function () {
    return view('legal_off.list');
})->name('legal_off');


Route::resource('/admin', AdminController::class);
Route::resource('/jobTitle', JobtitleController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('/level', LevelController::class);

///login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    ->name('login-process');

    // testRoute::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    // ->name('login-process');
