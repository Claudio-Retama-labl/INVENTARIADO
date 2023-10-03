<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Dependencias;
use App\Http\Controllers\Financiamientos;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes(
  
);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('articulos', [ArticulosController::class, 'index']);
Route::post('articulos-store', [ArticulosController::class, 'store'])->name('articulos-store');

Route::get('categorias', [Categorias::class, 'index']);
Route::post('categorias-store', [Categorias::class, 'store'])->name('categorias-store');
Route::get('dependencias', [Dependencias::class, 'index']);
Route::post('dependencias-store', [Dependencias::class, 'store'])->name('dependencias-store');;
Route::get('financiamientos', [Financiamientos::class, 'index']);
Route::post('financiamientos-store', [Financiamientos::class, 'store'])->name('financiamientos-store');


   /*  Route::get('admin/promociones', [AdminPromocionesController::class, 'index']);
    Route::post('admin/promociones-store', [AdminPromocionesController::class, 'store'])->name('admin/promociones-store');; */
    /*   Route::get('admin/horarios', [HorariosController::class, 'index'])->name('admin/horarios');
    Route::post('admin/horarios-crear', [HorariosController::class, 'store'])->name('admin/horarios-crear');
    Route::post('admin/horarios-crear', [HorariosController::class, 'store'])->name('admin/horarios-crear');
 */
   /*  Route::get('admin/zonas', [ZonasController::class, 'index']);
    Route::post('admin/', [ZonasController::class, 'store'])->name('admin/horarios');;
    Route::get('admin/servicios', [ServiciosController::class, 'index']);
    Route::get('admin/reservas', [ReservasController::class, 'index'])->name('admin/reservas'); */