<?php

use App\Models\GeneralScorings;
use App\Models\ReligionScorings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralScoringsController;
use App\Http\Controllers\ReligionScoringsController;

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/umum', [GeneralScoringsController::class, 'show']);
Route::get('/agama', [ReligionScoringsController::class, 'show']);

Route::get('/supervisiUmum', [GeneralScoringsController::class, 'index']);
Route::post('/supervisiUmum', [GeneralScoringsController::class, 'store'])->name('general.store');
//Route::get('/supervisiUmum', [GeneralScoringsController::class, 'calculateAndGrade']);

Route::get('/supervisiAgama', [ReligionScoringsController::class, 'index']);
Route::post('/supervisiAgama', [ReligionScoringsController::class, 'store'])->name('religion.store');

Route::get('/panduan', [GuideController::class, 'index']);

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate'])->name('login.action');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.action');
