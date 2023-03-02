<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductosController;
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
/*
Route::get('/', function () {

    $categorias = Categoria::where('parent_id', '=', null)->get();
    return view('pruebas', ['categorias' => $categorias]);
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [ProductosController::class, 'index'])->name('shop');
Route::get('cart', [ProductosController::class, 'cart'])->name('cart.index');
Route::get('add-to-card/{id}', [ProductosController::class, 'addToCart'])->name('cart.store');
Route::post('update', [ProductosController::class, 'cartUpdate'])->name('cart.update');
Route::post('remove', [ProductosController::class, 'removeFromCart'])->name('cart.remove');
//Route::post('/clear', [ProductosController::class, 'clear'])->name('cart.clear');


require __DIR__.'/auth.php';
