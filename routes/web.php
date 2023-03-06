<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\CategoriaController;
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

// Datatables routes
Route::resource('personas', PersonasController::class);
Route::resource('productos', ProductosController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('categorias', CategoriaController::class);

Route::get('logout', [PersonasController::class, 'logout'])->name('logout');

Route::get('/tienda', [ProductosController::class, 'shop'])->name('shop');
Route::get('cart', [ProductosController::class, 'cart'])->name('cart.index');
Route::get('add-to-card/{id}', [ProductosController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [ProductosController::class, 'cartUpdate'])->name('cart.update');
Route::post('/remove-from-cart', [ProductosController::class, 'removeFromCart']);
//Route::post('/clear', [ProductosController::class, 'clear'])->name('cart.clear');


//Pedidos
Route::get("/pedido/calendario", [PedidosController::class, "calendario"])->name("pedido.calendario");
Route::post("/pedido/store", [PedidosController::class, "store"])->name("pedido.store");

// Productos por categoria

Route::get('categoria/{id}', [ProductosController::class, 'show'])->name('producto.categoria');

// Confrimación creación pedido
Route::get('confirmacion', [PedidosController::class, 'confirmacion'])->name('confirmacion');

require __DIR__.'/auth.php';


