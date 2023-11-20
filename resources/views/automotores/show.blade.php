@extends('layouts.base')

@section('title', 'Detalles del Automotor')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Detalles del Automotor</h2>
    <div class="card text-center bg-transparent texto-tarjeta">
        <div class="card-header bg-body-secondary bg-opacity-75">
            <p class="card-title">Marca: {{ $automotor->marca }}</p>
            <p class="card-text">Modelo: {{ $automotor->modelo }}</p>
            <p class="card-text">Patente: {{ $automotor->patente }}</p>
            <p class="card-text">Tipo: {{ $automotor->tipo }}</p>
        </div>
        <div class="card-body bg-secondary bg-opacity-75">
            <h5>Titular del Automotor:</h5>
            <p><strong>Nombre:</strong> {{ $automotor->titular->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $automotor->titular->apellido }}</p>
        </div>
        <div class="card-footer bg-body-tertiary bg-opacity-75">
            <h5>Infracciones:</h5>
            @if ($automotor->infracciones->count() > 0)
                <ul>
                    @foreach ($automotor->infracciones as $infraccion)
                        <li>
                            <strong>Fecha:</strong> {{ $infraccion->fecha }} |
                            <strong>Descripción:</strong> {{ $infraccion->descripcion }} |
                            <strong>Tipo:</strong> {{ $infraccion->tipo }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No hay infracciones registradas para este automotor.</p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('automotores.index') }}" class="btn btn-ver">Volver a la Lista</a>
            <a href="{{ route('automotores.edit', ['automotore' => $automotor->id]) }}" class="btn btn-editar">Editar Automotor</a>
            
            <form action="{{ route('automotores.destroy', ['automotore' => $automotor->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este automotor?')">Borrar Automotor</button>
            </form>
        </div>
    </div>
@endsection
