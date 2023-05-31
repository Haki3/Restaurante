@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @if (auth()->user()->user_type === 'Chef')
            <div class="col-md-6 col-lg-3 mb-4">
                <a href="{{ route('bebidas.index') }}" class="card-link">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h2 class="card-title h5 m-0">Bebidas</h2>
                        </div>
                    </div>
                </a>
            @endif    
            </div>
            @if (auth()->user()->user_type === 'Chef')
            <div class="col-md-6 col-lg-3 mb-4">
                <a href="{{ route('platos.index') }}" class="card-link">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h2 class="card-title h5 m-0">Platos</h2>
                        </div>
                    </div>
                </a>
                @endif
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                     <a href="{{ route('pedidos.index') }}" class="card-link">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h2 class="card-title h5 m-0">Pedidos</h2>
                             </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                    <a href="{{ route('tickets.index') }}" class="card-link">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h2 class="card-title h5 m-0">Tickets</h2>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
@endsection

@push('styles')
    <style>
        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .card-link:hover .card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.2s ease-in-out;
        }
    </style>
@endpush
