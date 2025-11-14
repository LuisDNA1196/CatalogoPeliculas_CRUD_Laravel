@extends('layouts.app')

@section('title', 'Detalle de película')

@section('content')
    <h2>Detalle de película</h2>

    <dl class="row mt-3">
        <dt class="col-sm-2">ID</dt>
        <dd class="col-sm-10">{{ $pelicula->id }}</dd>

        <dt class="col-sm-2">Título</dt>
        <dd class="col-sm-10">{{ $pelicula->titulo }}</dd>

        <dt class="col-sm-2">Año</dt>
        <dd class="col-sm-10">{{ $pelicula->anio ?? 'N/D' }}</dd>

        <dt class="col-sm-2">Descripción</dt>
        <dd class="col-sm-10">
            {{ $pelicula->descripcion ?: 'Sin descripción' }}
        </dd>
    </dl>

    <a href="{{ route('peliculas.edit', $pelicula) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Volver al listado</a>

    <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" class="d-inline ms-2"
          onsubmit="return confirm('¿Seguro que deseas eliminar esta película?');">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
    </form>
@endsection
