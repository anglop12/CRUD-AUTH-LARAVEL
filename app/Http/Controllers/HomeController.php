<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $rol = $user->roles->implode('name', ',');

        switch ($rol) {
            case 'super-Admin':
                $saludo = 'Bienvenido super-Admin';
                return view('home', compact('saludo'));
                break;

            case 'admin-users':
                $saludo = 'Bienvenido admin-users';
                return view('home', compact('saludo'));
                break;

            case 'admin-roles':
                $saludo = 'Bienvenido admin-roles';
                return view('home', compact('saludo'));
                break;

            case 'admin-permisos':
                $saludo = 'Bienvenido admin-permisos';
                return view('home', compact('saludo'));
                break;

            case 'Invitado':
                $saludo = 'Bienvenido Invitado';
                return view('home', compact('saludo'));
                break;

        }
    }
}
