@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Crear Plato</h1>

            <form action="{{ route('platos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" min="0" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="nombre">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
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

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }
    </style>
@endsection
