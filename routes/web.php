<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TitularController;
use App\Http\Controllers\AutomotorController;
use App\Http\Controllers\InfraccionController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
/*
Route::get('/titulares', function () {
    return view('titulares.titulares');
})->middleware(['auth'])->name('titulares');

Route::get('/automotores', function () {
    return view('automotores.automotores');
})->middleware(['auth'])->name('automotores');

Route::get('/infracciones', function () {
    return view('infracciones.infracciones');
})->middleware(['auth'])->name('infracciones');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

                
// Rutas para los controladores TitularController, AutomotorController e InfraccionController. Uso la version RESTful de laravel para no tener que definir cada ruta de su respectivo método.
Route::middleware(['auth'])->group(function () {
    Route::resource('titulares', TitularController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('automotores', AutomotorController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('infracciones', InfraccionController::class);
});
                

require __DIR__.'/auth.php';
