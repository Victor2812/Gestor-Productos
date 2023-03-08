<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\DataTables\CategoriaDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriaDataTable $dataTable)
    {
        return $dataTable->render('categorias.home');
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
    public function store(Request $request, Categoria $categoria)
    {
        $categoria->update([
            'name' => $request->name,
            'parent_id' => $request->categoria_id
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        $categoria_padre = Categoria::where('id', "=", $categoria->parent_id)->get()->first();
        
        return view('categorias.show', [
            'categoria' => $categoria,
            'categoria_padre' => $categoria_padre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        $categoria_padre = Categoria::where('id', "=", $categoria->parent_id)->get()->first();
        $categorias = Categoria::all();

        return view('categorias.edit', [
            'categoria' => $categoria,
            'categoria_padre' => $categoria_padre,
            'categorias' => $categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        Categoria::destroy($categoria->id);
        return Redirect::route('home');
    }
}
