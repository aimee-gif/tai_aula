<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function index()
    {
        $objProduto = Produto::paginate(8);
        //dd("Teste");

        return view("produto.list2")->with(['produtos' => $objProduto]);

    }

    public function create()
    {

        return view("produto.create2");


    }


    public function store(Request $request, $id)
    {
        Validator::make($request->all(), Produto::rules(), Produto::message())->validate();

        $input = $request->all();
        $image = $request->file("nome_arq");
        if ($image) {
            $nome_arq = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $request->nome_arq->storeAs('public/imagem', $nome_arq);
            $input['nome_arq'] = $nome_arq;
        }


        if ($id == 0) {
        $produtos = new Produto;
        $produtos->nomeproduto1 = $request->nomeproduto1;
        $produtos->codigo1 = $request->codigo1;
        $produtos->tipoproduto1 = $request->tipoproduto1;
        $produtos->quantidadepedidos1 = $request->quantidadepedidos1;
        $produtos->estoque1 = $request->estoque1;

        $produtos->save();

    return \redirect()-> action('ProdutoController@index')-> with ('success', 'Registro Incluido Com Sucesso');
} else {

    $produtos = Produto::find($id);
    $produtos->nomeproduto1 = $request->nomeproduto1;
    $produtos->codigo1 = $request->codigo1;
    $produtos->tipoproduto1 = $request->tipoproduto1;
    $produtos->quantidadepedidos1 = $request->quantidadepedidos1;
    $produtos->estoque1 = $request->estoque1;

    $produtos->save();

    return \redirect()-> action('ProdutoController@index')-> with ('success', 'Registro Incluido Com Sucesso');
    }}

    public function edit($id)
    {
        $objProduto= Produto::find($id);

        return view("produto.edit2")->with(['produtos' => $objProduto]);


    }


    public function destroy( $id)
    {
        $produtos = Produto:: findOrFail($id);

        $produtos->delete();

        return \redirect()->action('ProdutoController@index')-> with ('error', 'Registro Removido Com Sucesso');

}

public function search(Request $request)
{
     if($request->tipo=="nomeproduto1"){
         $objResult = Produto:: where('nomeproduto1', 'like', "%" . $request->valor . "%") ->paginate(8);
     }else if($request->tipo=="codigo1"){
         $objResult = Produto:: where('codigo1','like', "%" . $request->valor . "%") -> paginate(8);
     } else if($request->tipo=="tipoproduto1"){
        $objResult = Produto:: where('tipoproduto1','like', "%" . $request->valor . "%") -> paginate(8);
     }

     return view("produto.list2")->with(['produtos' => $objResult]);

}
}
