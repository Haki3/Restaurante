@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Pedidos admin</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pedidos as $pedido)
            <tr>
              <td>{{ $pedido->id }}</td>
              <td>{{ $pedido->cliente }}</td>
              <td>{{ $pedido->fecha }}</td>
              <td>
                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
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
      border: none;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 30px;
    }

    .card-title {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 0;
    }

    .table th {
      background-color: #f5f5f5;
      font-weight: 700;
      text-align: left;
      padding: 10px;
    }

    .table td {
      border: 1px solid #ddd;
      padding: 10px;
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
      opacity: 0.8;
    }
  </style>
@endsection