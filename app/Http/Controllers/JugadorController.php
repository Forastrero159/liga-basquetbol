<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::with('equipo')->get();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        $equipos = Equipo::all();
        return view('jugadores.create', compact('equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipo_id' => 'required',
            'nombre' => 'required',
            'posicion' => 'nullable',
            'numero' => 'nullable|integer',
            'edad' => 'nullable|integer'
        ]);

        Jugador::create($request->all());

        return redirect()->route('jugadores.index')->with('success', 'Jugador registrado correctamente.');
    }

    public function edit(Jugador $jugadore)
    {
        $jugador = $jugadore;
        $equipos = Equipo::all();

        return view('jugadores.edit', compact('jugador', 'equipos'));
    }

    public function update(Request $request, Jugador $jugadore)
    {
        $jugador = $jugadore;

        $request->validate([
            'equipo_id' => 'required',
            'nombre' => 'required',
            'posicion' => 'nullable',
            'numero' => 'nullable|integer',
            'edad' => 'nullable|integer'
        ]);

        $jugador->update($request->all());

        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado correctamente.');
    }

    public function destroy(Jugador $jugadore)
    {
        $jugadore->delete();

        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado correctamente.');
    }
}