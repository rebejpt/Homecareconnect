<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\EmployeurController;
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
        Route::get('/users',[UserController::class,'getUsers'])->name('user.list');
        Route::get('/user/detail/{id}',[UserController::class,'getUser'])->name('user.detail');
        Route::get('/services/list',[ServiceController::class,'getServices'])->name('service.list');
        Route::get('/services/add',[ServiceController::class,'addServices'])->name('service.add');
        Route::post('/services/add',[ServiceController::class,'store'])->name('service.store');
        Route::get('/services/update/{id}',[ServiceController::class,'getUpdate'])->name('service.getUpdate');
        Route::Post('/services/update/{id}',[ServiceController::class,'update'])->name('service.update');
        Route::get('/services/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');

});

Route::prefix('employe')
    ->middleware(['auth','verified','role:employe'])
    ->group(function(){
        Route::get('/dashboard',[Dashboardcontroller::class,'employeDashboard'])->name('employe.dashboard');
        Route::get('/profile-employe',[UserController::class,'profileEmploye'])->name('employe.profile');
        Route::post('/addemploye',[EmployeController::class,'addEmploye'])->name('employe.add');

});


Route::prefix('employeur')
    ->middleware(['auth', 'verified','role:employeur'])
    ->group(function(){
        Route::get('/dashboard', [Dashboardcontroller::class,'employeurDashboard'])->name('employeur.dashboard');
        Route::get('/profile-employeur',[UserController::class,'profileEmployeur'])->name('employeur.profile');
        Route::post('/addemployeur',[EmployeurController::class,'addEmployeur'])->name('employeur.add');

}); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('acceuil', [TestController::class, 'acceuil']);

require __DIR__.'/auth.php';
