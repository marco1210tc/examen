@extends('layouts.master')

{{-- para la paginacion --}}
<script src="https://cdn.tailwindcss.com"></script>

@section('title', 'Clientes')

@section('content')


    <h1 class="mt-4 ml-8 text-xl">Clientes</h1>
      

  <div style="width: 100%; margin: 25px; text-align: center;">
    <span> &#x271A; </span>
    <a class="btn btn-add" href="{{ route('clientes.create') }}" > Agregar cliente </a>
  </div>

  <div class="table-centered">
    <table>
      <thead class="uppercase"> 
        <tr> 
          <th> # ID </th>
          <th>Nombres </th> 
          <th>Email</th> 
          <th>Dirección</th> 
          <th>Fono</th> 
          <th>Acción</th> 
        </tr>
      </thead> 
      <tbody>
      @if ($clientes)
        @foreach ($clientes as $cliente)
          <tr> 
            
            <td> {{ $cliente->id }} </td>
            <td> {{ $cliente->nombre }}</td> 
            <td> {{ $cliente->email }}</td>
            <td> {{ $cliente->direccion}} </td>
            <td> {{ $cliente->fono}} </td>

            <td> 
              
              <div style="display: flex; justify-content: space-evenly; align-items: center;">

                <a class="btn btn-edit" href=" {{ route('clientes.edit', $cliente) }}"> Editar  </a>
                
                <form style="margin:0;" action="{{ route('clientes.destroy', $cliente) }}" method="POST">
                  @csrf @method('DELETE')
                  <button type='submit' class="btn btn-delete"> Eliminar </button> 
                </form>
              </div>
            </td>

          </tr>
        @endforeach
      </tbody>
      @else
        <h3> No existen datos </h3>
      @endif
    </table>
    
  </div>

  <div class="w-100-dvh flex justify-center">

    <div style="width: 40%" class="mt-5 ">
      {{ $clientes->links() }}
    </div>

  </div>
  
@endsection