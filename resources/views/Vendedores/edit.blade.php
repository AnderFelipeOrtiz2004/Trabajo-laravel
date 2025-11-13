@extends ('layout')

@section('title', 'Editar Vendedor')

@section('contenido')

<div class="container">
    <h1>Editar formilario de vendedor</h1>
    <form action="{{ route('vendedores.update', ['vendedore' => $vend]) }}" method="POST">
        @csrf @method('PUT')
        @include('vendedores.form', ['vendedore' => $vend])
        <div class="mb-6">
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </div>
    <br>
         <div class="mb-6">
            <a class="btn btn-primary" href="{{ route('vendedores.index')}}">Cancelar</a>
        </div>
    </form>
</div>
  


@endsection