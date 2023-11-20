@extends('layouts.base')

@section('title', 'Crear Titular')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')

    <h2 class="libertador">Crear Titular</h2>
    <div class="rounded bg-dark bg-opacity-75 p-3">
        <form action="{{ route('titulares.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label texto-blanco-bold">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label texto-blanco-bold">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label texto-blanco-bold">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="mb-3">
                <label for="licencia" class="form-label texto-blanco-bold">Licencia</label>
                <input type="text" class="form-control" id="licencia" name="licencia" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Titular</button>
            <a href="{{ route('titulares.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
