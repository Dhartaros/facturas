<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\factura;

class pdfController extends Controller
{
    public function pdf(Request $request) {
    	$cliente 			= $request->input('cliente');
    	$direccion 			= $request->input('direccion');
    	$codigo_postal 		= $request->input('cp');
    	$ciudad 			= $request->input('ciudad');
    	$concepto 			= $request->input('concepto');
    	$precio_unitario 	= $request->input('pu');
    	$cantidad 			= $request->input('cant');

    	$factura = array('cliente' 			=> $cliente,
    				   	 'direccion' 		=> $direccion,
    				   	 'codigo_postal' 	=> $codigo_postal,
    				   	 'ciudad' 			=> $ciudad,
    				   	 'concepto' 		=> $concepto,
    				   	 'precio_unitario' 	=> $precio_unitario,
    				   	 'cantidad' 		=> $cantidad
    				  	);
        $vista = view('pdf')->with($factura);
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('factura.pdf');
    }
}
