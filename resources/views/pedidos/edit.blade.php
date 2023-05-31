@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Editar Pedido</h1>
      <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="mesa">Mesa</label>
          <input type="number" name="mesa" id="mesa" class="form-control" pattern="[0-9]+" required>
        </div>
        <div class="mb-3">
          <label for="user_id" class="form-label">User ID</label>
          <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $pedido->user_id }}" >
        </div>
        <div class="mb-3">
          <label for="total" class="form-label">Total</label>
          <input type="number" class="form-control" id="total" name="total" value="{{ $pedido->total }}">
        </div>
        <div class="mb-3">
          <label for="estado" class="form-label">Estado </label>
          <br>
          <label for="sample1" class="form-label">0 = Pendiente </label>
          <label for="sample2" class="form-label">1 = En preparacion </label>
          <label for="sample3" class="form-label">2 = Recoger </label>
          <label for="sample4" class="form-label">3 = Cobrar </label>
          <label for="sample4" class="form-label">4 = Pagado</label>

          <input type="text" class="form-control" id="estado" name="estado" value="{{ $pedido->estado }}">
        </div>
        <div class="mb-3">
          <label for="bebidas" class="form-label">Bebidas</label>
          <textarea class="form-control" id="bebidas" name="bebidas">{{ $pedido->bebidas }}</textarea>
        </div>
        <div class="mb-3">
          <label for="platos" class="form-label">Platos</label>
          <textarea class="form-control" id="platos" name="platos">{{ $pedido->platos }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
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

    .form-label {
      font-weight: 700;
      margin-bottom: 5px;
    }

    .form-control {
      border-radius: 5px;
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

    .btn-secondary {
      background-color: #6c757d;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>
@endsection
