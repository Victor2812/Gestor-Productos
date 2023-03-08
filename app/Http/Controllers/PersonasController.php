<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\Role;
use App\DataTables\PersonaDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PersonaDataTable $dataTable)
    {
        return $dataTable->render('personas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Personas $persona)
    {   
        
        $request->validate([
            "name" => 'required|string|max:255',
            "surname" => 'required|string|max:255',
            "email" => 'required|string|max:255',
            "password" => 'required|string|max:255',
            "dni" => 'required|string|min:9|max:9',
            "phone" => 'required',
            'role_id' => 'required'
        ]);

        

        $persona->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'surname' => $request['surname'],
            'dni' => $request['dni'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'role_id' => $request['role_id']
        ]);

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $persona)
    {
        $rol = Role::where('id', "=", $persona->role_id)->get()->first();
        return view('personas.show', [
            'persona' => $persona,
            'rol' => $rol
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $persona)
    {
        $roles = Role::all();
        return view('personas.edit', [
            'persona' => $persona,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        $request->validate([
            "name" => 'required|string|max:255',
            "surname" => 'required|string|max:255',
            "email" => 'required|string|max:255|unique:true',
            "password" => 'required|string|max:255|confirmed',
            "dni" => 'required|string|min:9|max:9|unique:true',
            "phone" => 'required',
        ]);

        $person = new Personas([
            'name' => $request['name'],
            'email' => $request['email'],
            'surname' => $request['surname'],
            'dni' => $request['dni'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'role_id' => 2
        ]);
        $person->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $persona)
    {
        Personas::destroy($persona->id);
        return Redirect::route('home');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
