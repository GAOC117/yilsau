<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NuestrosServiciosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SobreNosotrosController;


Route::get('/',HomeController::class)->name('home');

Route::get('/admin/dashboard', [AdminDashboardController::class,'index'])->middleware(['auth', 'verified'])->name('adminDashboard');
//Sobre Nosotros
Route::get('/sobre-nosotros', [SobreNosotrosController::class,'index'])->name('nosotros');
Route::get('/sobre-nosotros/edit', [SobreNosotrosController::class,'edit'])->name('nosotros.edit');//->middleware(['auth','verified'])->name('nosotros.edit');

//Nuestro Servicios
Route::get('/nuestros-servicios', [NuestrosServiciosController::class,'index'])->name('servicios');
Route::get('/nuestros-servicios/create', [NuestrosServiciosController::class,'create'])->name('servicios.create');//->middleware(['auth','verified'])->name('servicios.create');
Route::get('/nuestros-servicios/{servicio}/edit', [NuestrosServiciosController::class,'edit'])->name('servicios.edit');//->middleware(['auth','verified'])->name('servicios.edit');
Route::get('/nuestros-servicios/{servicio}', [NuestrosServiciosController::class,'show'])->name('servicios.show');//->middleware(['auth','verified'])->name('servicios.edit');


//Productos
Route::get('/productos', [ProductosController::class,'index'])->name('productos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
