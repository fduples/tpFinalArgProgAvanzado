@extends('layouts.base')

@section('title', 'Detalles del Titular')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Detalles del Titular</h2>
    <div class="card text-center bg-transparent texto-tarjeta">
        <div class="card-header bg-body-secondary bg-opacity-75">
            <h5 class="card-title">Nombre: {{ $titular->nombre }} {{ $titular->apellido }}</h5>
        </div>
        <div class="card-body bg-secondary bg-opacity-75">
            <p class="card-text">DNI: {{ $titular->dni }}</p>
            <p class="card-text">Licencia: {{ $titular->licencia }}</p>
        </div>
        <div class="card-footer bg-body-tertiary bg-opacity-75">
            <h2>Automotores a su nombre:</h2>
                @if ($titular->automotores->count() > 0)
                <div class="card-footer bg-body-tertiary bg-opacity-50">
                    <ul>
                        @foreach ($titular->automotores as $automotor)
                            <li class="fs-5">
                                <strong>Marca:</strong> {{ $automotor->marca }} |
                                <strong>Modelo:</strong> {{ $automotor->modelo }} |
                                <strong>Patente:</strong> {{ $automotor->patente }} |
                                <strong>Tipo:</strong> {{ $automotor->tipo }}
                                @if ($automotor->infracciones->count() > 0)
                                <div class="card-footer bg-body-tertiary bg-opacity-50">
                                    <ul>
                                        <li class="text-start">Infracciones</li>
                                        @foreach ($automotor->infracciones as $infraccion)
                                            <li class="texto-normal-i">
                                                <strong>Fecha:</strong> {{ $infraccion->fecha }} |
                                                <strong>Descripción:</strong> {{ $infraccion->descripcion }} |
                                                <strong>Tipo:</strong> {{ $infraccion->tipo }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @else
                                    <p>Sin infracciones registradas para este automotor.</p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                @else
                    <p>Este titular no tiene automotores registrados.</p>
                
                @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('titulares.index') }}" class="btn btn-ver">Volver a la Lista</a>
            <a href="{{ route('titulares.edit', ['titulare' => $titular->id]) }}" class="btn btn-editar">Editar Titular</a>
            
            <form action="{{ route('titulares.destroy', ['titulare' => $titular->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este titular?')">Borrar Titular</button>
            </form>
        </div>
    </div>
@endsection
