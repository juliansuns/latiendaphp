@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Catalogo de producto</h1>
</div>

@foreach($productos as $producto)
<div class="row">
    <div class="col s12 m6">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/' .$producto->imagenes) }}">
            </div>
            <div class="card-content">
            <span class="card-title">{{ $producto->nombre }}</span>

            <p>{{ $producto->desc}}</p>
                <ul>

                    <li>Precio: $ {{$producto->precio }}</li>
                    <li>Categoria:  {{$producto->categoria->nombre }}</li>
                    <li>Marca:  {{$producto->marcas->nombre }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection