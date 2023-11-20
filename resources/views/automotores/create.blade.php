@extends('layouts.base')

@section('title', 'Registrar Nuevo Automotor')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Registrar Nuevo Automotor</h2>
    <div class="rounded bg-dark bg-opacity-75 p-3">
        <form action="{{ route('automotores.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="marca" class="form-label texto-blanco-bold">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label texto-blanco-bold">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="mb-3">
                <label for="patente" class="form-label texto-blanco-bold">Patente</label>
                <input type="text" class="form-control" id="patente" name="patente" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label texto-blanco-bold">Tipo de Automotor</label>
                <select class="form-select" id="tipo" name="tipo" required>
                    <option value="Standard">Standard</option>
                    <option value="SUV">SUV</option>
                    <option value="Camioneta">Camioneta</option>
                    <option value="Camión">Camión</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="titular_id" class="form-label texto-blanco-bold">Titular</label>
                <select class="form-select" id="titular_id" name="titular_id" required>
                    @foreach ($titulares as $titular)
                        <option value="{{ $titular->id }}">{{ $titular->nombre }} {{ $titular->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Registrar Automotor</button>
            <a href="{{ route('automotores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
