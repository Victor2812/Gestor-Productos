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


