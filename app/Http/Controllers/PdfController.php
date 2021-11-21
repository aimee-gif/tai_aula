<?php

namespace App\Http\Controllers;
use App\Produto;
use PDF;

use Illuminate\Http\Request;

class PdfController extends Controller
{
   public function geraPdf(){
       $produtos = Produto::all();
       //dd($produtos);

       $pdf = PDF::loadView('pdf', compact('produtos'));

       return $pdf-> setPaper('a4')->stream('produto.pdf');


   }
}
