@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tickets</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Bebidas</th>
                    <th scope="col">Platos</th>
                    <th scope="col">Total</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <th scope="row">{{ $ticket->id }}</th>
                        <td>{{ $ticket->created_at }}</td>
                        <td>{{ $ticket->mesa }}</td>
                        <td>{{ $ticket->bebidas }}</td>
                        <td>{{ $ticket->platos }}</td>
                        <td>{{ $ticket->total }}</td>
                        <td>
                        <a href="{{ route('tickets.pdf', $ticket->id) }}" class="btn btn-primary">Descargar PDF</a>

                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
