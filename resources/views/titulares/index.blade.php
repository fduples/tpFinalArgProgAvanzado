@extends('layouts.base')

@section('title', 'Lista de Titulares')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <h2 class="libertador">Lista de Titulares</h2>
    <div class="text-end">
        <a href="{{ route('titulares.create') }}" class="btn btn-violeta mb-2">Crear Nuevo Titular</a>
    </div>
    <div class="table-responsive">
        <table class="custom-table">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>N° DNI</th>
                    <th>N° Licencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="fw-bold">
                @foreach ($titulares as $titular)
                    <tr>
                        <td>{{ $titular->nombre }}</td>
                        <td>{{ $titular->apellido }}</td>
                        <td>{{ $titular->dni }}</td>
                        <td>{{ $titular->licencia }}</td>
                        <td class="text-center td-acciones">
                            <a href="{{ route('titulares.show', ['titulare' => $titular->id]) }}" class="btn btn-ver m-1">Ver</a>
                            <a href="{{ route('titulares.edit', ['titulare' => $titular->id]) }}" class="btn btn-editar">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
