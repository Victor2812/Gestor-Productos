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
    return view('home', ['categorias' => $categorias]);
});
*/
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/gorka', function () {
    return view('pruebas_login_gorka');
})->name('gorka-login');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tienda', [ProductosController::class, 'index'])->name('shop');
Route::get('cart', [ProductosController::class, 'cart'])->name('cart.index');
Route::get('add-to-card/{id}', [ProductosController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [ProductosController::class, 'cartUpdate'])->name('cart.update');
Route::post('/remove-from-cart', [ProductosController::class, 'removeFromCart']);
//Route::post('/clear', [ProductosController::class, 'clear'])->name('cart.clear');


// Productos por categoria

Route::get('categoria/{id}', [ProductosController::class, 'show'])->name('producto.categoria');

require __DIR__.'/auth.php';


