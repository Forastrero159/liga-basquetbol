<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index()
    {
        $partidos = Partido::with(['equipoLocal', 'equipoVisitante'])->get();
        return view('partidos.index', compact('partidos'));
    }

    public function create()
    {
        $equipos = Equipo::all();
        return view('partidos.create', compact('equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipo_local_id' => 'required',
            'equipo_visitante_id' => 'required|different:equipo_local_id',
            'fecha' => 'required|date',
            'puntos_local' => 'required|integer',
            'puntos_visitante' => 'required|integer',
            'estado' => 'required'
        ]);

        Partido::create($request->all());

        return redirect()->route('partidos.index')->with('success', 'Partido registrado correctamente.');
    }

    public function edit(Partido $partido)
    {
        $equipos = Equipo::all();
        return view('partidos.edit', compact('partido', 'equipos'));
    }

    public function update(Request $request, Partido $partido)
    {
        $request->validate([
            'equipo_local_id' => 'required',
            'equipo_visitante_id' => 'required|different:equipo_local_id',
            'fecha' => 'required|date',
            'puntos_local' => 'required|integer',
            'puntos_visitante' => 'required|integer',
            'estado' => 'required'
        ]);

        $partido->update($request->all());

        return redirect()->route('partidos.index')->with('success', 'Partido actualizado correctamente.');
    }

    public function destroy(Partido $partido)
    {
        $partido->delete();

        return redirect()->route('partidos.index')->with('success', 'Partido eliminado correctamente.');
    }
}