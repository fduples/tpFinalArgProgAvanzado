<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenida/o') }}
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    esta es la página de administración de Titulares de automotores de la Municipalidad de Libertador General San Martín.
                </div>
            </div>
            <div class="">
                <br>
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-secondary-button style="width: 20%;">
                            <a href="{{ route('titulares.index') }}" style="width: 100%;">
                                Titulares
                            </a>
                        </x-secondary-button>
                </div>

                <br>
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-secondary-button style="width: 20%;">
                        <a href="{{ route('automotores.index') }}" style="width: 100%;">
                            Automotores
                        </a>
                    </x-secondary-button>
                </div>

                <br>
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-secondary-button style="width: 20%;">
                        <a href="{{ route('infracciones.index') }}" style="width: 100%;">
                            Infracciones
                        </a>
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
