<?php

use App\Http\Controllers\ProfileController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

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
Route::get("/welcome", function(){
    return view('welcome');
})->middleware(['auth', 'verified']);

Route::get("/pruebas-gorka", function(){
    return view('pruebas_login_gorka');
})->name("pruebas_gorka");


Route::get('/', function () {
    $categorias = Categoria::where('parent_id', '=', null)->get();
    return view('pruebas', ['categorias' => $categorias]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
