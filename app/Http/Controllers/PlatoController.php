<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    public function index()
    {
        $platos = Plato::all();
        return view('platos.index', compact('platos'));
    }

    public function create()
    {
        return view('platos.create');
    }

    public function store(Request $request)
    {
        $plato = new Plato;
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;
        $plato->save();
        return redirect()->route('platos.index')->with('success', 'Plato creado correctamente');
    }

    public function edit($id)
    {
        $plato = Plato::findOrFail($id);
        return view('platos.edit', compact('plato'));
    }

    public function update(Request $request, $id)
    {
        $plato = Plato::findOrFail($id);
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;
        $plato->save();
        return redirect()->route('platos.index')->with('success', 'Plato actualizado correctamente');
    }

    public function destroy($id)
    {
        $plato = Plato::findOrFail($id);
        $plato->delete();
        return redirect()->route('platos.index')->with('success', 'Plato eliminado correctamente');
    }
}
