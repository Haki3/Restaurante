@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Crear Pedido</h1>

      <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          
        </div>
        <div class="mb-3">
          <label for="mesa">Mesa</label>
          <input type="number" name="mesa" id="mesa" class="form-control" pattern="[0-9]+" required>
        </div>
        
        <div class="mb-3">
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        </div>

        <div class="mb-3">
          <h3>Bebidas</h3>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ración</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($bebidas as $bebida)
  <tr>
    <td>{{ $bebida->id }}</td>
    <td>{{ $bebida->nombre }}</td>
    <td>
      <input type="number" name="raciones[bebidas][{{ $bebida->id }}]" class="form-control" min="0" required>
      @if(isset($pedido) && isset($pedido->raciones) && isset($pedido->raciones['bebidas'][$bebida->id]))
        - {{ $pedido->raciones['bebidas'][$bebida->id] }}
      @endif
    </td>
  </tr>
@endforeach

            </tbody>
          </table>
        </div>

        <div class="mb-3">
          <h3>Platos</h3>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ración</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($platos as $plato)
  <tr>
    <td>{{ $plato->id }}</td>
    <td>{{ $plato->nombre }}</td>
    <td>
      <input type="number" name="raciones[platos][{{ $plato->id }}]" class="form-control" min="0" required>
      @if(isset($pedido) && isset($pedido->raciones) && isset($pedido->raciones['platos'][$plato->id]))
        - {{ $pedido->raciones['platos'][$plato->id] }}
      @endif
    </td>
  </tr>
@endforeach

            </tbody>
          </table>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
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

    .form-control {
      border-radius: 5px;
      padding: 10px;
    }
  </style>
@endsection
