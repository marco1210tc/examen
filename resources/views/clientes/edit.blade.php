@extends('layouts.master')

@section('title', 'Editar Cliente')
@section('content')


  <div class="form-section">

    <form action="{{ route('clientes.update', $cliente) }}" method="POST" >
      @method('PATCH')
      
      <h3> Edición de cliente </h3>

      @include('layouts.partials.form', ['btnText' => 'Actualizar'])

    </form>
  </div>
  

@endsection