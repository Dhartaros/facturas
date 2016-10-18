<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\recibo;

class pdfController extends Controller
{
    public function pdf(Request $request) {
        $query  = explode('&', $_SERVER['QUERY_STRING']);
        $recibo = array();
        foreach($query as $param)
        {
            list($name, $value) = explode('=', $param, 2);
            $recibo[urldecode($name)][] = urldecode($value);
        }
        $venta = array( 'conceptos'   => $recibo['concepto'],
                        'precios'     => $recibo['pu'],
                        'cantidades'  => $recibo['cant']
                      );   
        $recibo = array( 'cliente'          => $recibo['cliente'][0],
                         'direccion'        => $recibo['direccion'][0],
                         'codigo_postal'    => $recibo['cp'][0],
                         'ciudad'           => $recibo['ciudad'][0],
                         'venta'            => $venta
                       );
        $vista = view('pdf')->with($recibo);
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('recibo.pdf');
    }
}
