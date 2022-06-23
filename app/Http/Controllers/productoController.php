<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECCIONAR TODOS LOS PRODUCTOS
        $productos=Producto::all();
        //MOSTRAR VISTAR DEL CATALOGO DE PRODUCTO
        //LLEVADO LA LISTA DE PRODUCTOS
        return view('productos.index')
            ->with('productos', $productos);
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
        //VALIDACIÓN
        //1. establecer reglas de validacion
        $reglas=[
            "nombre"        =>'required|alpha|unique:productos,nombre',
            "desc"          =>'required|min:5|max:20',
            "precio"        =>'required|numeric',
            "imagen"        =>'required|image',
            "marca"         =>'required',
            "Categoria"     =>'required'
        ];

        //2. CREAR EL OBJETO DE VALIDADOR
        $v = Validator::make($r->all(), $reglas);

        //3. VALIDAR
        if($v->fails()){
            //VALIDACION FALLO
            //REDIRIGIR LA VISTA DE CREATE 
            return redirect('productos/create')
                        ->withErrors($v);

        }else{
            //VALIDACION EXITOSA
            $archivo=$r->imagen;
            //obtener el nombre original del arcivo
            $nombre_archivo = ($archivo->getClientOriginalName());
            //establecer la ubicacion de guardado del archivo
            $ruta = public_path()."/img";

            //mover el archivo de imagen a la ubicacion y nombre deseado
            $archivo->move($ruta , $nombre_archivo);
            
            //ASIGNAR ATRIBUTOS DEL PRODUCTO

            $p =new Producto();
            $p->nombre          =$r->nombre;
            $p->desc            =$r->desc;
            $p->precio          =$r->precio;
            $p->marca_id        =$r->marca;
            $p->categoria_id    =$r->Categoria;
            $p->imagenes    =$nombre_archivo;
            //GRABAR PRODUCTO
            $p->save();
            //REDIRIGIR A PRODUCTOS/CREATE
            //CON MENSAJE DE EXITO
            return redirect('productos/create')
                    ->with('mensajito' , 'pProducto registrado exitosamente');
        }
        

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
