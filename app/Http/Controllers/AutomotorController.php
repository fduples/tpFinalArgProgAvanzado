<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automotor;
use App\Models\Titular;

class AutomotorController extends Controller
{
    public function index()
    {
        $automotores = Automotor::all();
        return view('automotores.index', compact('automotores'));
    }

    public function create()
    {
        $titulares = Titular::all();

        return view('automotores.create', compact('titulares'));
    }

    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required|unique:automotors',
            'tipo' => 'required',
            'titular_id' => 'required|exists:titulars,id',
        ]);

        // Crear un nuevo automotor
        Automotor::create($request->all());

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor creado exitosamente');
    }

    public function show($id)
    {
        $automotor = Automotor::findOrFail($id);
        return view('automotores.show', compact('automotor'));
    }

    public function edit($id)
    {
        $automotor = Automotor::findOrFail($id);
        $titulares = Titular::all();
        return view('automotores.edit', compact('automotor', 'titulares'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos del formulario
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required|unique:automotors,patente,'.$id,
            'tipo' => 'required',
            'titular_id' => 'required|exists:titulars,id',
        ]);

        // Actualizar el automotor existente
        $automotor = Automotor::findOrFail($id);
        $automotor->update($request->all());

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar el automotor de la base de datos
        Automotor::destroy($id);

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor eliminado exitosamente');
    }
}
