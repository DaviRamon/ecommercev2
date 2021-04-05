<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Usado para Logar como Administrador
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view ('admin');
    }
}
