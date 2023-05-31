@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Bebidas</h1>
            <a href="{{ route('bebidas.create') }}" class="btn btn-primary">Crear Bebida</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bebidas as $bebida)
                        <tr>
                            <td>{{ $bebida->id }}</td>
                            <td>{{ $bebida->nombre }}</td>
                            <td>{{ $bebida->precio }}</td>
                            <td>
                                <a href="{{ route('bebidas.edit', $bebida->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('bebidas.destroy', $bebida->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            border: rgb;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: grid;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
        }

        .table th {
            background-color: #f5f5f5;
            font-weight: 700;
            text-align: end;
            padding: 10px;
            border-bottom: 0px solid #dee2e6;
        }

        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: end;
        }

        .btn {
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
@endsection
