<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboardcontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['role:admin'])-> get('/admin/dashboard', [Dashboardcontroller::class,'adminDashboard'])
// ->middleware(['auth', 'verified'])
// ->name('admin.dashboard');

// on va regrouper les groupes
Route::prefix('admin')
    ->middleware(['auth','verified','role:admin'])
    ->group(function(){
        Route::get('/dashboard',[Dashboardcontroller::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('/users',[UserController::class,'getUsers']);
});

Route::middleware(['role:employe'])-> get('/employe/dashboard', [Dashboardcontroller::class,'employeDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('employe.dashboard');

Route::middleware(['role:employeur'])-> get('/employeur/dashboard', [Dashboardcontroller::class,'employeurDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('employeur.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('acceuil', [TestController::class, 'acceuil']);

require __DIR__.'/auth.php';
