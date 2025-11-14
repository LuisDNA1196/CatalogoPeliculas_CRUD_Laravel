<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::orderBy('id', 'asc')->get();

        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'anio' => 'nullable|integer',
        ]);

        Pelicula::create($data);

        return redirect()
            ->route('peliculas.index')
            ->with('success', 'Película creada correctamente.');
    }

    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'anio' => 'nullable|integer',
        ]);

        $pelicula->update($data);

        return redirect()
            ->route('peliculas.show', $pelicula)
            ->with('success', 'Película actualizada correctamente.');
    }

    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();

        return redirect()
            ->route('peliculas.index')
            ->with('success', 'Película eliminada correctamente.');
    }
}
