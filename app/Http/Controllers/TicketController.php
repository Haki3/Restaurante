<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;


class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->pedido_id = $request->pedido_id;
        $ticket->codigo = $request->codigo;
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->pedido_id = $request->pedido_id;
        $ticket->codigo = $request->codigo;
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index');
    }

    public function generatePdf($id)
{
    $ticket = Ticket::findOrFail($id);

    // Generar la vista del PDF
    $view = View::make('tickets.pdf', compact('ticket'));
    $html = $view->render();

    // Crear una instancia de Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // Opcional: Personalizar opciones de configuración
    $dompdf->setPaper('A4', 'portrait');

    // Generar el PDF
    $dompdf->render();

    // Descargar el PDF
    return $dompdf->stream('ticket.pdf');
}

}
