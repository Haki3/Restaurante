@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tickets</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <th scope="row">{{ $ticket->id }}</th>
                        <td>{{ $ticket->user->name }}</td>
                        <td>{{ $ticket->created_at }}</td>
                        <td>{{ $ticket->status }}</td>
                        <td>
                            <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-primary">Ver</a>
                            @if($ticket->status !== 'Resuelto')
                                <form method="POST" action="{{ route('tickets.close', $ticket->id) }}" style="display: inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Cerrar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection