@extends('layout')

@section('title', 'Editar Categoria')

@section('contenido')
    <h1 class="mb-4">Editar Categoria</h1>

    <form method="POST" action="{{ route('categorias.update', $categoria) }}" class="row g-3">
        @csrf
        @method('PUT')
        @include('categorias.partials.form', ['categoria' => $categoria])
        <div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
@endsection