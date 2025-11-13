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

@section('title', 'Lista de productos')


@section('contenido')
    <a href="{{ route('productos.create') }}" class="btn btn-primary"> crear producto</a>
    @if($productos->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Descripción</th>
                        <th>Categorias</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $prod)
                        <tr>
                            <td>{{ $prod->id }}</td>
                            <td>
                                <a class="" href="{{ route('productos.show', $prod) }}">
                                    {{ $prod->nombre }}
                                </a>
                            </td>
                            <td>{{ $prod->precio }}</td>
                            <td>{{ $prod->stock }}</td>
                            <td>{{ $prod->descripcion }}</td>
                            <td>{{ optional($prod->categoria)->nombre ?? 'Sin categoría' }}</td>
                             <td class="d-flex gap-2">
                                <a class="btn btn-success" href="{{ route('productos.edit', $prod) }}">Editar</a>
                                <form action="{{ route('productos.destroy', $prod) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro que desea eliminar al producto {{ $prod->nombre }} ?')" required>
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay Productos aún.</p>
    @endif
@endsection
</body>
</html>