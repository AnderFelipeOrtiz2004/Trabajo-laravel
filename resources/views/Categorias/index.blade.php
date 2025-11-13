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

@section('title', 'Lista de categorias')

@section('contenido')
    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear Categoria</a>
    @if($categorias->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>
                                <a class="" href="{{ route('categorias.show', $cat) }}">
                                    {{ $cat->nombre }}
                                </a>
                            </td>
                            <td>{{ $cat->descripcion }}</td>
                            <td class="d-flex gap-2">
                                <a class="btn btn-success" href="{{ route('categorias.edit', $cat) }}">Editar</a>
                                <form action="{{ route('categorias.destroy', $cat) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro que desea eliminar la categoría {{ $cat->nombre }} ?')" required>
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
        <p class="text-muted">No hay Categorías aún.</p>
    @endif
@endsection

</body>
</html>