<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraccion;
use App\Models\Automotor;
use App\Models\Titular;


class InfraccionController extends Controller
{
    public function index()
    {
        $infracciones = Infraccion::all();
        return view('infracciones.index', compact('infracciones'));
    }

    public function create()
    {
        $automotores = Automotor::all();
        return view('infracciones.create', compact('automotores'));
    }

    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'automotor_id' => 'required|exists:automotors,id',
        ]);

        // Crear una nueva infracción
        Infraccion::create($request->all());

        return redirect()->route('infracciones.index')
            ->with('success', 'Infracción creada exitosamente');
    }

    public function show($id)
    {
        $infraccion = Infraccion::findOrFail($id);
        return view('infracciones.show', compact('infraccion'));
    }

    public function edit($id)
    {
        $infraccion = Infraccion::findOrFail($id);
        $automotores = Automotor::all();
        return view('infracciones.edit', compact('infraccion', 'automotores'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos del formulario
        $request->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'automotor_id' => 'required|exists:automotors,id',
        ]);

        // Actualizar la infracción existente
        $infraccion = Infraccion::findOrFail($id);
        $infraccion->update($request->all());

        return redirect()->route('infracciones.index')
            ->with('success', 'Infracción actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar la infracción de la base de datos
        Infraccion::destroy($id);

        return redirect()->route('infracciones.index')
            ->with('success', 'Infracción eliminada exitosamente');
    }
}
