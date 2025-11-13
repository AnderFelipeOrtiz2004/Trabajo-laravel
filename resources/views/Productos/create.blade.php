@extends('layout')
@section('title', 'Crear Producto')
@section('contenido')
    <h1 class="mb-4">Crear Nuevo Producto</h1>

   <form method="POST" action="{{ route('productos.store') }}" class="row g-3">
        @csrf
        @include('productos.partials.form')
        <div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </div>
    </form>
  @endsection