<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard/demande',function(){
    return view("clients.demande");
})->name('demande');

    Route::get('/dashboard/license',function(){
        return view("clients.license");
    })->name('license');
    Route::get('/dashboard/suivi',function(){
        return view("clients.suivi");
    })->name('suivi');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index']);
        // autres routes admin...
    });
    Route::middleware(['auth'])->group(function (){
 
        Route::get('admin/dashboard',[AdminController::class, 'index'])->name('admin');
       
        
    });

require __DIR__.'/auth.php';
