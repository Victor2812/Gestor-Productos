<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Productos;
use App\DataTables\ProductoDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    public function shop()
    {
        $productos = Productos::all();
        $categorias = Categoria::where('parent_id', '=', null)->get()->all();

        return view('productos.index', [
            'products' => $productos,
            'categorias' => $categorias,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ProductoDataTable $dataTable)
    {
        return $dataTable->render('productos.table');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'alt' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Guardar la imagen en la carpeta "imgs" en la carpeta "public"
        if ($request->hasFile('alt')) {
            $file = $request->file('alt');
            $nombre = $file->getClientOriginalName();
            $ruta = public_path('/imgs');
            $file->move($ruta, $nombre);
        }

        $product = new Productos;
        $product->name = $request->name;//$validate['name'];
        $product->description = $request->description;//$validate['description'];
        $product->tipo_vender = $request->tipo_vender;
        $product->precio_base = $request->precio_base;
        $product->pedido_minimo = $request->pedido_minimo;
        $product->alt = "/imgs/" . $nombre;
        $product->categoria_id = $request->categoria_id;
        $product->save();

        flash('Producto creado','success');
        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        $categoria = Categoria::where('id', "=", $producto->categoria_id)->get()->first();

        return view('productos.show', [
            'producto' => $producto,
            'categoria' => $categoria
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', [
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }


    public function verCategoria($id) {
        $productos = Productos::where('categoria_id', "=", $id)->get()->all();
        $categoria = Categoria::where('id', "=", $id)->get()->first();
        $subcategorias = Categoria::where('parent_id', '=', $id)->get()->all();

        return view('productos.verCategoria', [
            'productos' => $productos,
            'categoria' => $categoria,
            'subcategorias' => $subcategorias
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto)
    {
        $producto->update([
            'name' => $request->name,
            'descripction' => $request->descripction,
            'tipo_vender' => $request->tipo_vender,
            'precio_base' => $request->precio_base,
            'pedido_minimo' => $request->pedido_minimo,
            'categoria_id' => $request->categoria_id
        ]);

        flash('Producto actualizado','success');
        return Redirect::route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto)
    {
        Productos::destroy($producto->id);
        flash('Producto eliminado','success');
        return Redirect::route('productos.index');
    }


    // CART PRODUCT FUNCTIONS

    public function cart() {
        return view('productos.cart');
    }

    public function addToCart($id) {

        $product = Productos::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            //dd($product);
        } else {
            //dd($product, 'else block');
            $cart[$id] = [
                "product_id" => $product->id,
                "name" => $product->name,
                "descrition" => $product->descrition,
                "quantity" => 1,
                "precio" => $product->precio_base,
                "image" => $product->alt,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto añadido al carrito exitosamente');
    }

    public function cartUpdate(Request $request) {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'El carrito se ha modificado exitosamente');

            return redirect()->back();
        }
    }

    public function removeFromCart(Request $request) {
        //dd($request);
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Producto eliminado del carrito exitosamente');
        }
    }
}
