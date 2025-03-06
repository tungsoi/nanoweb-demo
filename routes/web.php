<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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

Route::get('/staffs',  [StaffController::class, 'index'])->name('staffs');
Route::post('/staffs', [StaffController::class, 'store'])->name('staffs.store');
Route::get('/staffs/create', [StaffController::class, 'create'])->name('staffs.create');
Route::get('/staffs/{staff}', [StaffController::class, 'show'])->name('staffs.show');
Route::get('/staffs/{staff}/edit', [StaffController::class, 'edit'])->name('staffs.edit');
Route::post('/staffs/update', [StaffController::class, 'update'])->name('staffs.update');
