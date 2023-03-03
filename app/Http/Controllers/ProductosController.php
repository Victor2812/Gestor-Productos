<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        $categorias = Categoria::where('parent_id', '=', null)->get()->all();

        return view('productos.index', [
            'products' => $productos,
            'categorias' => $categorias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productos = Productos::where('categoria_id', "=", $id)->get()->all();
        $categoria = Categoria::where('id', "=", $id)->get()->first();

        return view('productos.show', [
            'productos' => $productos,
            'categoria' => $categoria,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
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
            dd($product);
        } else {
            //dd($product, 'else block');
            $cart[$id] = [
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
        }
    }

    public function removeFromCart(Request $request) {
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
