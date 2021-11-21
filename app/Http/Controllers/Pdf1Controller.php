<?php

namespace App\Http\Controllers;
use App\Pedido;
use PDF;

use Illuminate\Http\Request;

class Pdf1Controller extends Controller
{
    public function geraPdf(){
    $pedidos = Pedido::all();
    //dd($produtos);

    $pdf = PDF::loadView('pdf1', compact('pedidos'));

    return $pdf-> setPaper('a4')->stream('pedidos.pdf');
}
}

