<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\recibo;

class pdfController extends Controller
{
    public function pdf(Request $request) {
    	$cliente 			= $request->input('cliente');
    	$direccion 			= $request->input('direccion');
    	$codigo_postal 		= $request->input('cp');
    	$ciudad 			= $request->input('ciudad');

    	$concepto1 			= $request->input('concepto');
    	$precio_unitario1 	= $request->input('pu');
    	$cantidad1 			= $request->input('cant');
        $concepto2          = $request->input('concepto2');
        $precio_unitario2   = $request->input('pu2');
        $cantidad2          = $request->input('cant2');
        $concepto3          = $request->input('concepto3');
        $precio_unitario3   = $request->input('pu3');
        $cantidad3          = $request->input('cant3');

        $concepto1  = array('concepto'          => $concepto1,
                            'precio_unitario'   => $precio_unitario1,
                            'cantidad'          => $cantidad1
                           );
        $concepto2  = array('concepto'          => $concepto2,
                            'precio_unitario'   => $precio_unitario2,
                            'cantidad'          => $cantidad2
                           );
        $concepto3  = array('concepto'          => $concepto3,
                            'precio_unitario'   => $precio_unitario3,
                            'cantidad'          => $cantidad3
                           );
        $concepto   = array('concepto1' => $concepto1,
                            'concepto2' => $concepto2,
                            'concepto3' => $concepto3
                           );
    	$recibo = array( 'cliente' 			=> $cliente,
    				   	 'direccion' 		=> $direccion,
    				   	 'codigo_postal' 	=> $codigo_postal,
    				   	 'ciudad' 			=> $ciudad,
    				   	 'concepto' 		=> $concepto
    				   );
        //dd($recibo['concepto']['concepto2']['concepto']);
        $vista = view('pdf')->with($recibo);
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('recibo.pdf');
    }
}
