<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     * redirecciona al formulario de crear
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     * envia los datos del formulario a la base de datos
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'cargo' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:20'],
        ]);

        Vendedor::create($data);
        return redirect()->route('vendedores.index')->with('ok', 'Vendedor creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vend = \App\Models\Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vend'));
    }

    /**  .
     * Update the specified ]
     * =resource in storage.
     */
    public function update(Request $request, $id)
    {
      $vend = \App\Models\Vendedor::findOrFail($id);

        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'cargo' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:20'],
        ]);
        $vend->update($data);
        return redirect()->route('vendedores.index')->with('ok', 'Vendedor actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendoresDelete = \App\Models\Vendedor::findOrFail($id);
        $vendoresDelete->delete();
        return redirect()->route('vendedores.index')->with('ok', 'Vendedor eliminado.');
    }
}
