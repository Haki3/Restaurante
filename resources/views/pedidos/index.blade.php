@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Pedidos</h1>
      <div class="mb-3">
        <a href="{{ route('pedidos.create') }}" class="btn btn-success">Crear</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Total</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Estado</th>
            <th>Mesa</th>
            <th>Bebidas</th>
            <th>Platos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pedidos as $pedido)
            <tr>
              <td>{{ $pedido->id }}</td>
              <td>{{ $pedido->user_id }}</td>
              <td>{{ $pedido->total }}</td>
              <td>{{ $pedido->created_at }}</td>
              <td>{{ $pedido->updated_at }}</td>
              <td>
                @if ($pedido->estado == 0)
                  <span class="badge  text-black">Pendiente</span>
                @elseif ($pedido->estado == 1)
                  <span class="badge  text-black">En preparación</span>
                @elseif ($pedido->estado == 2)
                  <span class="badge  text-black">Recoger</span>
                @elseif ($pedido->estado == 3)
                  <span class="badge  text-black">Cobrar</span>
                @elseif ($pedido->estado == 4)
                  <span class="badge  text-black">Pagado</span>
                @endif
              </td>
              <td>{{ $pedido->mesa }}</td>

              <td>
                @if ($pedido->bebidas)
                  @php
                    $bebidas = explode(' - ', $pedido->bebidas);
                  @endphp
                  @foreach ($bebidas as $bebida)
                    {{ $bebida }}
                    <br>
                  @endforeach
                @endif
              </td>
              <td>
                @if ($pedido->platos)
                  @php
                    $platos = explode(' - ', $pedido->platos);
                  @endphp
                  @foreach ($platos as $plato)
                    {{ $plato }}
                    <br>
                  @endforeach
                @endif
              </td>
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
