<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises' , function()
{
    $paises =   ["Colombia"     =>  [
                                    "CAP"  =>"Bogota",
                                    "MON"   =>"Peso",
                                    "POB"   =>51,
                                    "CIU"   => [
                                                "Medellin",
                                                "Cali",
                                                "Pereira"
                                                ]
                                    ],
                "Ecuador"       =>  [
                                    "CAP"  =>"Quito",
                                    "MON"   =>"Dolar",
                                    "POB"   =>20,
                                    "CIU"   =>  [
                                                "Cuenca",
                                                "Guayaquil",
                                                ]
                                    ],
                ];
        return view('Paises')
        ->with('paises', $paises);
});