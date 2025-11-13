<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

@extends('layout')

@section('title', 'Lista de vendedores')

@section('contenido')
<div class="mb-6">
    <a class="btn btn-primary" href="{{ route('vendedores.create')}}">Nuevo vendedor</a>
</div>
    @if($vendedores->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedores as $vend)
                        <tr>
                            <td>{{ $vend->id }}</td>
                            <td>
                                <a href="{{ route('vendedores.show', $vend) }}">
                                    {{ $vend->nombre }}
                                </a>
                            </td>
                            <td>{{ $vend->cargo }}</td>
                            <td>{{ $vend->telefono }}</td>
                            <td>
                                
                                <a class="btn btn-success" href="{{ route('vendedores.edit', $vend) }}">Editar</a>
                                
                                <form action="{{ route('vendedores.destroy', ['vendedore' => $vend->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Esta seguro de elminar a {{ $vend->nombre }}');"> 
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay Vendedores aún.</p>
    @endif
@endsection
</body>
</html>