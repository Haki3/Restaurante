<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Bebida;
use App\Models\Plato;
use App\Models\Ticket;


class PedidoController extends Controller
{
    public function index()
{
    $pedidos = Pedido::all();

    return view('pedidos.index', ['pedidos' => $pedidos]);
}


    public function create()
    {
        $bebidas = Bebida::all();
        $platos = Plato::all();
        return view('pedidos.create', compact('bebidas', 'platos'));
    }

    public function store(Request $request)
{
    $pedido = new Pedido;
    $pedido->mesa = $request->input('mesa');
    $pedido->fecha = $request->input('fecha');
    $pedido->user_id = $request->input('user_id');

    $raciones = $request->input('raciones');

    $bebidasText = [];
    $platosText = [];

    // Calcular el precio total de las bebidas y platos
    $total = 0;

    // Calcular el precio total de las bebidas y guardar los nombres con cantidades
    if (isset($raciones['bebidas'])) {
        foreach ($raciones['bebidas'] as $bebidaId => $racion) {
            $bebida = Bebida::find($bebidaId);
            if ($bebida && $racion >= 1) {
                $precio = $bebida->precio * $racion;
                $total += $precio;
                $bebidasText[] = $bebida->nombre . ' - ' . $racion;
            }
        }
    }

    // Calcular el precio total de los platos y guardar los nombres con cantidades
    if (isset($raciones['platos'])) {
        foreach ($raciones['platos'] as $platoId => $racion) {
            $plato = Plato::find($platoId);
            if ($plato && $racion >= 1) {
                $precio = $plato->precio * $racion;
                $total += $precio;
                $platosText[] = $plato->nombre . ' - ' . $racion;
            }
        }
    }

    $pedido->bebidas = implode(', ', $bebidasText);
    $pedido->platos = implode(', ', $platosText);
    $pedido->total = $total;
    $pedido->save();

    return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente');
}







    public function edit($id)
    {

        $bebidas = Bebida::all();
        $platos = Plato::all();
        $pedido = Pedido::findOrFail($id);

        return view('pedidos.edit', compact('pedido', 'bebidas', 'platos'));
}

    public function update(Request $request, $id)
    {   // Verificar si el estado del pedido es 4
         // Obtener todos los pedidos con estado igual a 4
         try {
    $pedidos = Pedido::where('estado', 2)->get();

    foreach ($pedidos as $pedido) {
        // Crear un nuevo ticket
        $ticket = new Ticket();
        $ticket->pedido_id = $pedido->id;
        $ticket->mesa = $pedido->mesa;
        $ticket->bebidas = $pedido->bebidas;
        $ticket->platos = $pedido->platos;
        $ticket->total = $pedido->total;

 

        // Guardar el nuevo ticket
        $ticket->save();
    }
}catch (\Exception $e) {
    dd($e->getMessage());
}
        $pedido = Pedido::findOrFail($id);
        $pedido->mesa = $request->mesa;
        $pedido->user_id = $request->user_id;
        $pedido->fecha = $request->fecha;
        $pedido->estado = $request->estado;
        $pedido->total = $request->total;
        $pedido->save();


        return redirect()->route('pedidos.index');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index');
    }
}
