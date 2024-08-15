@extends('layouts.master')

@section('title', 'Agregar cliente')

@section('content')
  <h3 style="width: 100%; text-align: center"> Agregar cliente </h3>

  <div class="form-section">
    <form action="{{ route('clientes.store') }}" method="POST">
      @include('layouts.partials.form', ['btnText' => 'Agregar'])
    </form>
  </div>
@endsection