<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <nav class= "navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('productos.index')}}">Productos</a>
            <a class="navbar-brand" href="{{route('vendedores.index')}}">Vendedores</a>
            <a class="navbar-brand" href="{{route('categorias.index')}}">Categorias</a>
        </div>
    </nav>
    
    <main class="container py-4">
        @if(session('ok'))
            <div class="alert alert-success">
                {{session('ok')}}
            </div>
            @endif
            @yield('contenido')
    </main>
</body>
</html>