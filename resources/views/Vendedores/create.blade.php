@extends('layout')

@section('title', 'Crear Vendedor')

@section('contenido')
    <h1 class="mb-4">Crear Nuevo Vendedor</h1>

    <form action="{{ route('vendedores.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
        </div>

        <div class="form-group mb-3">
            <label for="cargo">Cargo</label>
            <input name="cargo" type="text" class="form-control" id="cargo" placeholder="Ingrese cargo">
        </div>

        <div class="form-group mb-3">
            <label for="telefono">Teléfono</label>
            <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Ingrese teléfono">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection