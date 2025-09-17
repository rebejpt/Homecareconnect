<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboardcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [Dashboardcontroller::class,'adminDashboard'])
->middleware(['auth', 'verified'])
->name('admin.dashboard');

Route::get('/employe/dashboard', [Dashboardcontroller::class,'employeDashboard'])
->middleware(['auth', 'verified'])
->name('employe.dashboard');

Route::get('/employeur/dashboard', [Dashboardcontroller::class,'employeurDashboard'])
->middleware(['auth', 'verified'])
->name('employeur.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('acceuil', [TestController::class, 'acceuil']);

require __DIR__.'/auth.php';
