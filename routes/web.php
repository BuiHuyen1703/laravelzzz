<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
