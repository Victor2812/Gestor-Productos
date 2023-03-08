<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Models\Productos;

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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

Route::get('categoria/{id}', [ProductosController::class, 'verCategoria'])->name('producto.categoria');

// Confrimación creación pedido
Route::get('confirmacion', [PedidosController::class, 'confirmacion'])->name('confirmacion');

//Most sold products
Route::get('/most-sold', function() {
    $mostSoldItems = DB::table('pedido_productos')
                        ->select('producto_id', DB::raw('SUM(cantidad) as total_quantity'))
                        ->groupBy('Producto_id')
                        ->orderByDesc('total_quantity')
                        ->limit(5)
                        ->get();

    $productos = [];
    foreach ($mostSoldItems as $mostSold) { //producto_id
        $id = $mostSold->producto_id;
        $prod = Productos::where('id', '=', $id)->get();
        array_push($productos, $prod);

        //dd($productos);
    }
    //dd($mostSoldItems);
    return new JsonResponse($productos);
});

//All products statistics
Route::get('/stats', function() {
    $mostSoldItems = DB::table('pedido_productos')
                        ->select('producto_id', DB::raw('SUM(cantidad) as total_quantity'))
                        ->groupBy('Producto_id')
                        ->orderByDesc('total_quantity')
                        ->get()
                        ->all();

    $productos = [];
    foreach ($mostSoldItems as $mostSold) { //producto_id
        $total_quantity = $mostSold->total_quantity;
        $id = $mostSold->producto_id;
        $prod = Productos::where('id', '=', $id)->get()->first();
        $name = $prod['name'];
        array_push($productos, [
            'name' => $name,
            'quantity' => $total_quantity,
        ]);

        //dd($productos);
    }
    //dd($productos);
    return new JsonResponse($productos);
});

require __DIR__.'/auth.php';


//editar persona
Route::get('/personas/editar/{persona}', [PersonasController::class,'edit'])->name('personas.edit');
Route::post('/personas/store/{persona}', [PersonasController::class,'store'])->name('personas.store');
//ver persona
Route::get('/personas/ver/{persona}', [PersonasController::class,'show'])->name('personas.show');
//borrrar persona
Route::get('/personas/destroy/{persona}', [PersonasController::class,'destroy'])->name('personas.destroy');


//editar producto
Route::get('/productos/editar/{producto}', [ProductosController::class,'edit'])->name('productos.edit');
Route::post('/productos/store/{producto}', [ProductosController::class,'store'])->name('productos.store');
//ver producto
Route::get('/productos/ver/{producto}', [ProductosController::class,'show'])->name('productos.show');
//borrrar producto
Route::get('/productos/destroy/{producto}', [ProductosController::class,'destroy'])->name('productos.destroy');


//editar categoria
Route::get('/categorias/editar/{categoria}', [CategoriaController::class,'edit'])->name('categorias.edit');
Route::post('/categorias/store/{categoria}', [CategoriaController::class,'store'])->name('categorias.store');
//ver categoria
Route::get('/categorias/ver/{categoria}', [CategoriaController::class,'show'])->name('categorias.show');
//borrrar categoria
Route::get('/categorias/destroy/{categoria}', [CategoriaController::class,'destroy'])->name('categorias.destroy');
//borrrar pedido
Route::get('/pedidos/destroy/{pedido}', [PedidosController::class,'destroy'])->name('pedidos.destroy');



