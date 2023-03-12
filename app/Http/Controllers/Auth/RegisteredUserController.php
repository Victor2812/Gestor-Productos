<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Personas;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($ruta = null): View
    {
        return view('auth.register', [
            "ruta" => $ruta
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'dni' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Personas::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Personas::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'dni' => $request->dni,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2
        ]);
      //  dd($user);
        event(new Registered($user));

        Auth::login($user);
        if(is_null($request->ruta))
        {
            return redirect(RouteServiceProvider::HOME);
        }
        else
        {
            return redirect()->route($request->ruta);
        }

    }
}
