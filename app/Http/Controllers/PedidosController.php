<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Personas;
use App\DataTables\PedidoDataTable;
use App\Models\Pedido_Producto;
use App\Models\Productos;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


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

        $user = Auth::user();
        $email = $user->email;
        $nombre = $user->name;
        Mail::send('email.id_pedido', ['id' => $pedido->id, 'productos' => $productos], function ($mail) use ($email, $nombre) {
            $mail->to($email, $nombre);
            $mail->from('from@example.com', 'Egibide');
            $mail->subject('Pedido realizado');
        });

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
        $productos = [];
        $pd = DB::table('pedido_productos')->where('pedido_id', '=', $pedido -> id)->get()->all();

        foreach ( $pd as $p) {
            $prod = Productos::where('id', '=', $p->producto_id)->get()->first();
            array_push($productos, $prod);
        }

        return view('pedidos.show', [ 
            'pedido' => $pedido, 
            'pedprod' => $pd,
            'productos' => $productos
        ]);
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

       
        $user = Personas::where('id', "=", $pedido->persona_id)->get()->first();
        $email = $user->email;
        $nombre = $user->name;

        Mail::send('email.estado_pedido', ['estado' => $pedido->estado, 'id' => $pedido->id], function ($mail) use ($email, $nombre) {
            $mail->to($email, $nombre);
            $mail->from('from@example.com', 'Egibide');
            $mail->subject('Estado del pedido actualizado');
        });
        
        flash('Estado del pedido actaulizado','success');
        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedidos $pedido)
    {   
        $pd = DB::table('pedido_productos')->where('pedido_id', '=', $pedido->id)->get();
        //dd($pd);
        foreach ($pd as $ped) {
            DB::table('pedido_productos')->where('id', '=', $ped->id)->delete();
        }
        Pedidos::destroy($pedido->id);
        flash('Pedido eliminado','success');
        return redirect()->route('pedidos.index');
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
        $productos = [];
        $pedido = DB::table('pedido_productos')->where('pedido_id', '=', $id)->get()->all();
        $ped = Pedidos::where('id', '=', $id)->get()->first();

        foreach ( $pedido as $p) {
            $prod = Productos::where('id', '=', $p->producto_id)->get()->first();
            array_push($productos, $prod);
        }


        return view('pedidos.show_my_order', [
            'pedido' => $pedido,
            'productos' => $productos,
            'total' => $ped,
        ]);
    }


//FUNCION PARA MOSTRAR EL MENSAJE DE CONFIRMACION DEL PEDIDO
    public function confirmacion() {
        return view("pedidos.confirmacion");
    }
}
