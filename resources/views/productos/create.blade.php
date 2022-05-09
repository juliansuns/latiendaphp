@extends('layouts.principal')

@section('contenido')


    <form class="col s8">
        <div class="row">
            <div class="col s8">
                    <h1 class="blue-text text-darken-2">Nuevo Producto</h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre" id="nombre" type="text" class="validate">
          <label for="nombre">Nombre Producto</label>
        </div>
        <div class="input-field col s8">
          <input id="desc" type="text" class="validate">
          <label for="last_name">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate">
          <label for="disabled">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
            <div class="btn">
            <span>Ingrese Imagen</span>
            <input type="file">
        </div>
            <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
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