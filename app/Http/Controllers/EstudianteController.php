<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function holaMundo()
    {
        return response()->json(['mensaje' => 'Hola Mundo, estudiantes: Hinara, Anna, Jj']);
    }
}
