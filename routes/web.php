<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OutletController;
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

Route::get('/', [LandingController::class, 'index']);

Route::get('/outlet', [OutletController::class, 'create'])->middleware(['auth'])->name('outlet.create');

Route::get('/dashboard', [LandingController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('admin.dashboard');



require __DIR__.'/auth.php';
