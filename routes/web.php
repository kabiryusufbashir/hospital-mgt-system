<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DoctorController;

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

// Login User 
Route::get('/', [LoginController::class, 'index'])->name('landing-page');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Add Doctor
Route::get('/alldoctor', [DoctorController::class, 'index'])->name('all.doctor');
Route::get('/createdoctor', [DoctorController::class, 'create'])->name('create.doctor');
Route::post('/adddoctor', [DoctorController::class, 'store'])->name('add.doctor');
Route::get('/editdoctor/{id}/edit', [DoctorController::class, 'edit'])->name('edit.doctor');
Route::patch('/editdoctor/{id}/update', [DoctorController::class, 'update'])->name('update.doctor');
Route::delete('/deletedoctor/{id}', [DoctorController::class, 'destroy'])->name('del.doctor');