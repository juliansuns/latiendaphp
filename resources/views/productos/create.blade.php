@extends('layouts.principal')

@section('contenido')
    <form class="col s8" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
      @csrf

      @if( session('mensajito') )
          <div class="row">
            <strong>{{ session('mensajito') }}</strong>
          </div>
      @endif

        <div class="row">
            <div class="col s8">
                    <h1 class="blue-text text-darken-2">Nuevo Producto</h1>
            </div>
        </div>
      <div class="row">
        <!--NOMBRE-->
        <div class="input-field col s8">
          <input placeholder="Nombre" id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nombre Producto</label>
          <strong class="#ff5252 red accent-2">{{ $errors->first('nombre') }}</strong>
        </div>
        
        <!--NOMBRE-->
        <div class="input-field col s8">
          <input id="desc" type="text" name="desc" class="validate">
          <label for="last_name">Descripcion</label>
          <strong>{{ $errors->first('desc') }}</strong>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" name="precio" type="number" class="validate">
          <label for="disabled">Precio</label>
          <strong>{{ $errors->first('precio') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
            <select name="marca" id="marca">
              <option value="">Elija su marca</option>
              @foreach($Marcas as $marca)
              <option value="{{$marca->id}}">{{ $marca->nombre }}</option>
              @endforeach
            </select>
              <label for="">Elija Marca</label>
              <strong>{{ $errors->first('marca') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="Categoria" id="Categoria">
            <option value="">Elija la Categoria</option>
              @foreach($Categorias as $Categoria)
              <option value="{{$Categoria->id}}">
                {{ $Categoria ->nombre}}
              </option>
              @endforeach
          </select>
          <label for="">Elija la Categoria</label>
          <strong>{{ $errors->first('Categoria') }}</strong>
        </div>
      </div>
      </div>
      <div class="file-field input-field col s8">
      <div class="btn">
        <span>Ingrese una imagen</span>
        <input type="file" name="imagen" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Elija imagen">
      </div>
        <strong class="text-danger">{{ $errors->first('imagen') }}</strong>
    </div>
        
    </div>
      </div>
      <div class="row">
        <div class="col s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">
            <i class="material-icons right">Enviar</i>
        </button>
        </div>
      </div>
    </form>

  @endsection