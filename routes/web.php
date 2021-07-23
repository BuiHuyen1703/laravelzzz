<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobtitleController;
use App\Http\Controllers\LegaloffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TimekeeppingController;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Route;

///login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    ->name('login-process');

Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/', function () {
        return view('index ');
    })->name('dashboard');
});

//admin
Route::resource('/admin', AdminController::class);
Route::prefix('admin')->group(function () {
    // Route::get('/hide/{id}', 'AdminController@hide')->name('hide');
});
//Job
Route::resource('/jobTitle', JobtitleController::class);
Route::prefix('jobTitile')->name("jobTitle.")->group(function () {
    Route::get('/hide/{id}', [JobtitleController::class, 'hide'])->name('hide');
});

//department
Route::resource('/department', DepartmentController::class);
Route::prefix('department')->name("department.")->group(function () {
    Route::get('/hide/{id}', [DepartmentController::class, 'hide'])->name('hide');
});

//level
Route::resource('/level', LevelController::class);
Route::prefix('level')->name("level.")->group(function () {
    Route::get('/hide/{id}', [LevelController::class, 'hide'])->name('hide');
});

//timekeeping
Route::resource('/timekeeping', TimekeeppingController::class);

Route::prefix('timekeeping')->name("timekeeping.")->group(function () {
    Route::get('/hide/{id}', [TimekeeppingController::class, 'hide'])->name('hide');
});

//legal-off
Route::resource('/legalOff', LegaloffController::class);

Route::prefix('legalOff')->name("legalOff.")->group(function () {
    Route::get('/hide/{id}', [LegaloffController::class, 'hide'])->name('hide');
    Route::get('/haha/{id}', [LegaloffController::class, 'approve'])->name('haha');
    Route::get('/hihi/{id}', [LegaloffController::class, 'approve1'])->name('hihi');
});

//employee

Route::prefix('employee')->name("employee.")->group(function () {
    Route::get('/hide/{id}', [EmployeeController::class, 'hide'])->name('hide');
    Route::get('/insert/excel', [EmployeeController::class, 'insertExcel'])->name('insert-excel');
    Route::post('/insert/excel/process', [EmployeeController::class, 'insertExcelProcess'])->name('insert-excel-process');
});
Route::resource('/employee', EmployeeController::class);

//USER
Route::resource('/user', UserController::class);

Route::get('/user/login', [UserAuthenticateController::class, 'login'])->name('login');
Route::post('/user/login-process', [UserAuthenticateController::class, 'loginProcess'])->name('login-process');
