<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre"
        value="{{ old('nombre', $vendedore?->nombre) }}">
</div>
<div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input name="cargo" type="text" class="form-control" id="cargo" placeholder="cargo"
        value="{{ old('cargo', $vendedore?->cargo) }}"> 
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="teléfono"
        value="{{ old('telefono', $vendedore?->telefono) }}">   
</div>