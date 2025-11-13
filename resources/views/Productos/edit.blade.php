@extends('layout')

@section('title', 'Editar Producto')

@section('contenido')
    <h1 class="mb-4">Editar Producto</h1>

    <form method="POST" action="{{ route('productos.update', $producto) }}" class="row g-3">
        @csrf
        @method('PUT')
        @include('productos.partials.form', ['producto' => $producto])
        <div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        <div class="mb-6">
            <a class="btn btn-primary" href="{{ route('productos.index')}}">Cancelar</a>
        </div>
    </form>
    <br>
    
@endsection