<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\DataTables\PedidoDataTable;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PedidoDataTable $dataTable)
    {
        return $dataTable->render('pedidos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = session()->get("cart");

        $total = 0;
        foreach((array) session('cart') as $id => $details)
        {
            $total += $details['precio'] * $details['quantity'];
        }

        DB::beginTransaction();
        try{
        $pedido = auth()->user()->pedidos()->create([
            "estado" => Pedidos::ESTADOS['recibido'],
            "fecha_recogida" => $request->fecha,
            "fecha_reserva" => now(),
            "importe_total" => $total,
        ]);

        foreach($productos as $producto)
        {
         $pedido->productos()->attach($producto['product_id'],['cantidad' => $producto['quantity'],'precio' => (float) $producto['precio'] * $producto['quantity'] ]);
        }

        DB::commit();

        $request->session()->forget('cart');
        flash('Pedido Realizado','success');
        return redirect()->route('confirmacion');
    }
    catch(\Exception $e)
    {
        DB::rollBack();
        flash('Error realizar el pedido','danger');
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedido)
    {
        return view('pedidos.show',compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedidos $pedido)
    {
        return view('pedidos.edit',compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedidos $pedido)
    {
        $validator = Validator::make($request->all(), [
            'estado' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $pedido->update([
            'estado' => $request->estado
        ]);
        flash('Estado del pedido actaulizado','success');
        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedidos $pedido)
    {
        try{
            $pedido->delete();
            flash('Pedido Borrado','success');
            return redirect()->back();
        }
        catch(Exception $e)
        {
            flash('Error: al borrar un pedido','danger');
            return redirect()->back();
        }
    }

    // Mis Pedidos
    public function misPedidos(Request $request) {
        $pedidosFiltrados = null;
        $pedidos = Pedidos::where('persona_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();
    
        $request->validate([
            'search' => 'nullable|integer',
        ]);

        // Obtener filtros
        $search = $request->query('search');

        // Aplicar filtro
        if ($search) {
           foreach ($pedidos as $p => $data) {
                if ($data['id'] == $search) {
                    $pedidosFiltrados = $pedidos[$p];
                }
           }
        }
        
        return view('pedidos.my_order', [
            'pedidos' => $pedidos,
            'pedido' => $pedidosFiltrados,
            'old_search' => $search
        ]);
    }

    public function miPedido($id) {

        return view('pedidos.show_my_order');
    }


//FUNCION PARA MOSTRAR EL MENSAJE DE CONFIRMACION DEL PEDIDO
    public function confirmacion() {
        return view("pedidos.confirmacion");
    }
}
