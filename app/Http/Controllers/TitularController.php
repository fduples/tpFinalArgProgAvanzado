<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titular;

class TitularController extends Controller
{
    public function index()
    {
        $titulares = Titular::all();
        return view('titulares.index', compact('titulares'));
    }

    public function create()
    {
        return view('titulares.create');
    }

    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:titulars',
            'licencia' => 'required',
        ]);

        // Crear un nuevo titular
        Titular::create($request->all());

        return redirect()->route('titulares.index')
            ->with('success', 'Titular creado exitosamente');
    }

    public function show($id)
    {
        $titular = Titular::findOrFail($id);
        return view('titulares.show', compact('titular'));
    }

    public function edit($id)
    {
        $titular = Titular::findOrFail($id);
        return view('titulares.edit', compact('titular'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:titulars,dni,'.$id,
            'licencia' => 'required',
        ]);

        // Actualizar el titular existente
        $titular = Titular::findOrFail($id);
        $titular->update($request->all());

        return redirect()->route('titulares.index')
            ->with('success', 'Titular actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar el titular de la base de datos
        Titular::destroy($id);

        return redirect()->route('titulares.index')
            ->with('success', 'Titular eliminado exitosamente');
    }
}
