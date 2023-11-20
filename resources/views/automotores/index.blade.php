@extends('layouts.base')

@section('title', 'Lista de Automotores')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')

    <h2 class="libertador">Lista de Automotores</h2>
    <div class="text-end">
        <a href="{{ route('automotores.create') }}" class="btn btn-violeta mb-2">Registrar Nuevo Automotor</a>
    </div>
    @if ($automotores->count() > 0)
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Patente</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($automotores as $automotor)
                        <tr>
                            <td>{{ $automotor->marca }}</td>
                            <td>{{ $automotor->modelo }}</td>
                            <td>{{ $automotor->patente }}</td>
                            <td>{{ $automotor->tipo }}</td>
                            <td>
                                <a href="{{ route('automotores.show', ['automotore' => $automotor->id]) }}" class="btn btn-ver">Ver</a>
                                <a href="{{ route('automotores.edit', ['automotore' => $automotor->id]) }}" class="btn btn-editar">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No hay automotores registrados.</p>
    @endif
@endsection
