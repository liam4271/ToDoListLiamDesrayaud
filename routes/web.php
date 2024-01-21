<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\CategorieController;

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
    return view('home');
})->name('home');


Route::get('/taches', [TacheController::class, 'index'])->name('allTache');
Route::get('/taches/create', [TacheController::class, 'create'])->name('createtaches');
Route::post('/taches/create', [TacheController::class, 'store']);
Route::get('/tache/{id}', [TacheController::class, 'show'])->name('tache');
Route::get('/tache/{id}/edit', [TacheController::class, 'edit'])->name('editTache');
Route::put('/tache/{id}/edit', [TacheController::class, 'update']);
Route::delete('/taches/{id}/supprimer', [TacheController::class, 'destroy'])->name('taches.destroy');


Route::get('/categories', [CategorieController::class, 'index'])->name('allCategorie');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('createCategorie');
Route::post('/categories/create', [CategorieController::class, 'store']);
Route::get('/categorie/{id}', [CategorieController::class, 'show'])->name('categorie');
Route::get('/categorie/{id}/edit', [CategorieController::class, 'edit'])->name('editCategorie');
Route::put('/categorie/{id}/edit', [CategorieController::class, 'update']);
Route::delete('/categories/{id}/supprimer', [CategorieController::class, 'destroy'])->name('categories.destroy');

Route::get('/categorie/{categorieId}/taches', [TacheController::class, 'showByCategorie'])->name('tachesByCategorie');
