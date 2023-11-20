@extends('layouts.base')

@section('title', 'Detalles de la Infracción')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')

    <h2 class="libertador">Detalles de la Infracción</h2>
    <div class="card text-center bg-transparent texto-tarjeta">
        <div class="card-header bg-body-secondary bg-opacity-75">
            <h3 class="card-title">Fecha: {{ $infraccion->fecha }}</h3>
            <p class="card-text">Descripción: {{ $infraccion->descripcion }}</p>
            <p class="card-text">Tipo: {{ $infraccion->tipo }}</p>
        </div>
        <div class="card-body bg-secondary bg-opacity-75">
            <h5>Automotor Asociado:</h5>
            <p><strong>Marca:</strong> {{ $infraccion->automotor->marca }}</p>
            <p><strong>Modelo:</strong> {{ $infraccion->automotor->modelo }}</p>
            <p><strong>Patente:</strong> {{ $infraccion->automotor->patente }}</p>
        </div>
        <div class="card-footer bg-body-tertiary bg-opacity-75">
            <h5>Titular del Automotor:</h5>
            <p><strong>Nombre:</strong> {{ $infraccion->automotor->titular->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $infraccion->automotor->titular->apellido }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('infracciones.index') }}" class="btn btn-ver">Volver a la Lista</a>
            <a href="{{ route('infracciones.edit', ['infraccione' => $infraccion->id]) }}" class="btn btn-editar">Editar Infracción</a>
            
            <form action="{{ route('infracciones.destroy', ['infraccione' => $infraccion->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta infracción?')">Borrar Infracción</button>
            </form>
        </div>
      </div>
@endsection
