@extends('layouts.base')

@section('title', 'Lista de Infracciones')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')

    <h2 class="libertador">Lista de Infracciones</h2>
    <div class="text-end">
        <a href="{{ route('infracciones.create') }}" class="btn btn-violeta mb-2">Registrar Nueva Infracción</a>
    </div>
    @if ($infracciones->count() > 0)
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Automotor</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infracciones as $infraccion)
                        <tr>
                            <td>{{ $infraccion->fecha }}</td>
                            <td>{{ $infraccion->descripcion }}</td>
                            <td>{{ $infraccion->automotor->marca }} {{ $infraccion->automotor->modelo }} ({{ $infraccion->automotor->patente }})</td>
                            <td>{{ $infraccion->tipo }}</td>
                            <td>
                                <a href="{{ route('infracciones.show', ['infraccione' => $infraccion->id]) }}" class="btn btn-ver">Ver</a>
                                <a href="{{ route('infracciones.edit', ['infraccione' => $infraccion->id]) }}" class="btn btn-editar">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No hay infracciones registradas.</p>
    @endif
@endsection
