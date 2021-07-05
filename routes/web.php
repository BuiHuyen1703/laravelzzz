<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');
Route::get('/employee', function () {
    return view('employee.list');
})->name('employee');

Route::get('/job_title', function () {
    return view('job_title.list');
})->name('job_title');

Route::get('/level', function () {
    return view('level.list');
})->name('level');

Route::get('/department', function () {
    return view('department.list');
})->name('department');

Route::get('/timekeeping', function () {
    return view('timekeeping.list');
})->name('timekeeping');

Route::resource('/admin', AdminController::class);

Route::get('/legal_off', function () {
    return view('legal_off.list');
})->name('legal_off');

///login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    ->name('login-process');

    // testRoute::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    // ->name('login-process');
