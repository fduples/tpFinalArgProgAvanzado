@extends('layouts.base')

@section('title', 'Registrar Nueva Infracción')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Registrar Nueva Infracción</h2>
    <div class="rounded bg-dark bg-opacity-75 p-3">
        <form action="{{ route('infracciones.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fecha" class="form-label texto-blanco-bold">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label texto-blanco-bold">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <div class="mb-3">
                <label for="patente" class="form-label texto-blanco-bold">Seleccionar Automotor (por patente)</label>
                <select class="form-select" id="automotor_id" name="automotor_id" required>
                    @foreach ($automotores as $automotor)
                        <option value="{{ $automotor->id }}">{{ $automotor->marca }} {{ $automotor->modelo }} ({{ $automotor->patente }})</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label texto-blanco-bold">Tipo de Infracción</label>
                <select class="form-select" id="tipo" name="tipo" required>
                    <option value="alta velocidad">Alta Velocidad</option>
                    <option value="doble fila">Doble Fila</option>
                    <option value="alcoholemia">Alcoholemia</option>
                    <option value="falta de documentación">Falta de Documentación</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Registrar Infracción</button>
            <a href="{{ route('infracciones.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

