@extends('layout')

@section('title', 'Crear Categoria')

@section('contenido')
    <h1 class="mb-4">Crear Nueva Categoria</h1>

   <form method="POST" action="{{ route('categorias.store') }}" class="row g-3">
        @csrf
        @include('categorias.partials.form')
        <div>
            <button type="submit" class="btn btn-primary">Guardar Categoria</button>
        </div>
    </form>
    @endsection