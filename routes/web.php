<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\AjoutServiceController;

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
        Route::get('/services',[ServiceController::class,'getServices']);

        // Route pour afficher le formulaire (GET)
        Route::get('/ajout_service', [AjoutServiceController::class, 'getAjoutServices'])->name('ajout_service');

        // Route pour traiter le formulaire (POST)
        Route::post('/ajout_service', [AjoutServiceController::class, 'store'])->name('ajout_service.store');

        //Route::get('/ajout_service',[AjoutServiceController::class,'getAjoutServices']);
        //Route::post('/ajout_service', [AjoutServiceController::class, 'store'])->name('ajout_service.store');
        


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
