@extends('layouts.base')

@section('title', 'Lista de Titulares')

@section('nav')
    @include('layouts.nav-b')
@endsection

@section('content')
    <div class="libertador text-center m-2">
        <h1 class="fs-1 p-2">Municipalidad de Libertador Gral. San Martín</h1>
        <h2 class="fs-2 texto-oscuro-bold p-2">Sistema de Registro Automotor</h2>
    </div>
    <div class="m-2">
        <p class="fs-5">
        Bienvenida/o <strong>{{ Auth::user()->name }}</strong> al sistema de Registro Automotor de la municipalidad de Libertador General San Martín.
        </p>
    </div>
        <div class="d-flex p-3">
            <div class="flex-fill text-center">
                <a href="{{ route('titulares.index') }}" class="btn btn-violeta">
                    Titulares
                </a>
            </div>
            <div class="flex-fill text-center">
                <a href="{{ route('automotores.index') }}" class="btn btn-violeta">
                    Automotores
                </a>
            </div>
            <div class="flex-fill text-center">
                <a href="{{ route('infracciones.index') }}" class="btn btn-violeta">
                    Infracciones
                </a>
            </div>
        </div>
    
    
    
   
@endsection

