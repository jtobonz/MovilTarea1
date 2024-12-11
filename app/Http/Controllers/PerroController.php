<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerroController extends Controller
{
    // Mostrar todos los perros (paginado opcional)
    public function index()
    {
        return Perro::paginate(10);
    }

    // Mostrar un perro específico
    public function show($id)
    {
        return Perro::findOrFail($id);
    }

    // Crear un nuevo perro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'edad' => 'required|integer',
        ]);

        $perro = Perro::create($request->all());

        return response()->json($perro, 201);
    }

    // Actualizar un perro existente
    public function update(Request $request, $id)
    {
        $perro = Perro::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'edad' => 'required|integer',
        ]);

        $perro->update($request->all());

        return response()->json($perro);
    }

    // Eliminar un perro
    public function destroy($id)
    {
        $perro = Perro::findOrFail($id);
        $perro->delete();

        return response()->json(['message' => 'Perro eliminado']);
    }
}
