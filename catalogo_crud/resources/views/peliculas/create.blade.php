@extends('layouts.app')

@section('title', 'Nueva película')

@section('content')
    <h2>Nueva película</h2>

    <form action="{{ route('peliculas.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título *</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required
                   value="{{ old('titulo') }}">
            @error('titulo')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio" class="form-control"
                   value="{{ old('anio') }}">
            @error('anio')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="form-control">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
