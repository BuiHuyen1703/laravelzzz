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
//admin
Route::resource('/admin', AdminController::class);
Route::prefix('admin')->group(function () {
    Route::get('/hide/{id}', 'AdminController@hide')->name('hide');
});
//Job
Route::resource('/jobTitle', JobtitleController::class);

//department
Route::resource('/department', DepartmentController::class);

//level
Route::resource('/level', LevelController::class);

//timekeeping
Route::resource('/timekeeping', TimekeeppingController::class);

//legal-off
Route::resource('/legalOff', LegaloffController::class);

//employee
Route::resource('/employee', EmployeeController::class);


///login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    ->name('login-process');

    // testRoute::post('/login-process', [AuthenticateController::class, 'loginProcess'])
    // ->name('login-process');
