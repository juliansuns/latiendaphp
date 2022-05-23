<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Aqui va a ir el listado del productos ";  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //SELECCIONA TODA LAS MARCAS
         $Marcas =Marca::all();

         //SELECCIONA TODAS LAS CATEGORIAS
         $Categorias =Categoria::all();
 
         //MOSTRAR LA VISTA DEL NUEVO PRODUCTO
         //ENVIANDOLES LOS DATOS DE MARCA Y CATEGORIA
         return view('productos.create')
                 ->with('Marcas', $Marcas)
                 ->with('Categorias', $Categorias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //CREAR NUEVO PRODUCTO
        $p=new Producto();
        
        //ASIGNAR ATRIBUTOS DEL PRODUCTO
        $p->nombre          =$r->nombre;
        $p->desc            =$r->desc;
        $p->precio          =$r->precio;
        $p->marca_id        =$r->marca;
        $p->categoria_id    =$r->Categoria;
        //GRABAR PRODUCTO
        $p->save();
        echo "producto guardado";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aqui van el detalle del producto con id: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
