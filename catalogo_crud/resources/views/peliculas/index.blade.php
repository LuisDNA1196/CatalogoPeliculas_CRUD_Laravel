@extends('layouts.app')

@section('title', 'Listado de películas')

@section('content')
    <h2>Listado de películas</h2>

    @if($peliculas->isEmpty())
        <p>No hay películas registradas aún.</p>
    @else
        <table class="table table-bordered table-striped align-middle mt-3">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Año</th>
                    <th style="width:180px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td>{{ $pelicula->id }}</td>
                        <td>{{ $pelicula->titulo }}</td>
                        <td>{{ $pelicula->anio ?? 'N/D' }}</td>
                        <td>
                            <a href="{{ route('peliculas.show', $pelicula) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                            <a href="{{ route('peliculas.edit', $pelicula) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Seguro que deseas eliminar esta película?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('peliculas.create') }}" class="btn btn-primary mt-2">+ Agregar nueva película</a>
@endsection
