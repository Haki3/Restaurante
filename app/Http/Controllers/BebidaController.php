<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use Illuminate\Http\Request;

class BebidaController extends Controller
{
    public function index()
    {
        $bebidas = Bebida::all();
        return view('bebidas.index', compact('bebidas'));
    }

    public function create()
    {
        return view('bebidas.create');

    }
    public function store(Request $request)
    {
        $bebida = new Bebida;
        $bebida->nombre = $request->nombre;
        $bebida->precio = $request->precio;
        $bebida->save();
        return redirect()->route('bebidas.index')->with('success', 'Bebida creada correctamente');
    }

    public function edit($id)
    {
        $bebida = Bebida::findOrFail($id);
        return view('bebidas.edit', compact('bebida'));
    }

    public function update(Request $request, $id)
{
    $bebida = Bebida::findOrFail($id);
    $bebida->nombre = $request->input('nombre');
    $bebida->precio = $request->input('precio');
    $bebida->save();

    return redirect()->route('bebidas.index')->with('success', 'Bebida actualizada exitosamente');
}



    public function destroy($id)
    {
        $bebida = Bebida::findOrFail($id);
        $bebida->delete();
        return redirect()->route('bebidas.index')->with('success', 'Bebida eliminada correctamente');
    }
}
