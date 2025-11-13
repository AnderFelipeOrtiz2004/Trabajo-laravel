@php 
    $c = $categoria ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $c?->nombre) }}">
    @error('nombre') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $c?->descripcion) }}">
    @error('descripcion') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

