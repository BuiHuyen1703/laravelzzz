<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\JobtitleController;
use App\Http\Controllers\LegaloffController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SalaryDetailController;
use App\Http\Controllers\TimekeeppingController;
use Illuminate\Support\Facades\Route;

///login
Route::get('/login', [AuthenticateController::class, 'loginAdmin'])->name('login-admin');
Route::post('/login-process', [AuthenticateController::class, 'loginProcessAdmin'])
    ->name('login-process');

Route::get('/logout-admin', [AuthenticateController::class, 'logoutAdmin'])->name('logout-admin');

Route::middleware(['isAuth'])->group(function () {
    Route::get('/', function () {
        return view('index ');
    })->name('dashboard');


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

    // Route::prefix('timekeeping')->name("timekeeping.")->group(function () {
    //     Route::get('/hide/{id}', [TimekeeppingController::class, 'hide'])->name('hide');
    // });

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

    //salary
    Route::resource('/salary', SalaryDetailController::class);
    Route::prefix("salary")->name("salary.")->group(function () {
        Route::get('/detail', [SalaryDetailController::class, 'detail'])->name('detail');
    });
    //calender
    Route::get('/calender', function () {
        return view('calender.list');
    })->name('calender');

    //holiday
    Route::resource('/holiday', HolidayController::class);
});
//USER
// Route::resource('/user', UserController::class);
// Route::get('/user', function () {
//     return view('user.index');
// })->name('userindex');

Route::get('/user/login', [AuthenticateController::class, 'loginUser'])->name('login-user');
Route::post('/user/login-process', [AuthenticateController::class, 'loginProcessUser'])->name('login-process-user');
Route::get('/logout', [AuthenticateController::class, 'logoutUser'])->name('logout-user');
Route::middleware(['isGuest'])->group(function () {
    Route::get('/user', function () {
        return view('user.index ');
    })->name('userIndex');
});
Route::get('/tt', function () {
    return view('user.times.test');
});
