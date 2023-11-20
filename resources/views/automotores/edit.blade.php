@extends('layouts.base')

@section('title', 'Editar Automotor')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Editar Automotor</h2>

    <div class="rounded bg-dark bg-opacity-75 p-3">
        <form action="{{ route('automotores.update', ['automotore' => $automotor->id]) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="marca" class="form-label texto-blanco-bold">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ $automotor->marca }}" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label texto-blanco-bold">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $automotor->modelo }}" required>
            </div>
            <div class="mb-3">
                <label for="patente" class="form-label texto-blanco-bold">Patente</label>
                <input type="text" class="form-control" id="patente" name="patente" value="{{ $automotor->patente }}" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label texto-blanco-bold">Tipo de Automotor</label>
                <select class="form-select" id="tipo" name="tipo" required>
                    <option value="Standard" {{ $automotor->tipo == 'Standard' ? 'selected' : '' }}>Standard</option>
                    <option value="SUV" {{ $automotor->tipo == 'SUV' ? 'selected' : '' }}>SUV</option>
                    <option value="Camioneta" {{ $automotor->tipo == 'Camioneta' ? 'selected' : '' }}>Camioneta</option>
                    <option value="Camión" {{ $automotor->tipo == 'Camión' ? 'selected' : '' }}>Camión</option>
                </select>
            </div>

            <!-- Agregar más campos según sea necesario -->

            <div class="mb-3">
                <label for="titular_id" class="form-label texto-blanco-bold">Titular</label>
                <select class="form-select" id="titular_id" name="titular_id" required>
                    @foreach ($titulares as $titular)
                        <option value="{{ $titular->id }}" {{ $automotor->titular_id == $titular->id ? 'selected' : '' }}>
                            {{ $titular->nombre }} {{ $titular->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar Automotor</button>
            <a href="{{ route('automotores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
