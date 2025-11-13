@php
    $p = $producto ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $p?->nombre) }}">
    @error('nombre') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Precio</label>
    <input type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" 
        value="{{ old('precio', $p?->precio) }}">
    @error('precio') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $p?->stock) }}">
    @error('stock') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $p?->descripcion) }}">
    @error('descripcion') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Categoría</label>
    <select name="categoria_id" class="form-select @error('categoria_id') is-invalid @enderror">
        <option value="">Seleccione una categoría</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id', $p?->categoria_id) == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
    @error('categoria_id') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

</div>