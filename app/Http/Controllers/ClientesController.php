<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() {

        $clientes = Cliente::latest()->paginate(5);

        return view('clientes.index', compact('clientes'));
    }

    public function create(Cliente $cliente)
    {
        return view('clientes.create', compact('cliente'));
    }

    public function store(CreateClienteRequest $request)
    {
        $cliente = new Cliente($request->validated());
        $cliente->save();

        return redirect()
            ->route('clientes.index')
            ->with('state', 'El cliente fue agregado correctamente.');
    }

    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(CreateClienteRequest $request, string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->fill($request->validated());
        $cliente->save();

        return redirect()
            ->route('clientes.index')
            ->with('state', 'El cliente fue actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()
            ->route('clientes.index')
            ->with('state', 'El cliente se eliminó correctamente.');        
    }

}
