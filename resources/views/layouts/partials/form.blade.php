@csrf

<div class="form" style="height: fit-content">

  <div class="form-group">
    <label for="nombre"> Nombres: </label>
    <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
    {{ $errors->first('nombre') }}
  </div>

  <div class="form-group">
    <label for="email"> Email: </label>
    <input type="text" name="email" value="{{ old('email', $cliente->email) }}">
    {{ $errors->first('email') }}
  </div>

  <div class="form-group">
    <label for="direccion"> Dirección: </label>
    <input type="text" name="direccion" value="{{ old('direccion', $cliente->direccion) }}">
    {{ $errors->first('direccion') }}
  </div>

  <div class="form-group">
    <label for="fono"> Teléfono: </label>
    <input type="text" name="fono" value="{{ old('fono', $cliente->fono) }}">
    {{ $errors->first('fono') }}
  </div>


  <div class="form-group">
    <button class="btn btn-send"> {{ $btnText }} </button>
  </div>
  
</div>
