<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\PedidoTamanho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;


class PedidoController extends Controller
{
    public function index()
    {
        $objPedido = Pedido::paginate(8);
        //dd("Teste");

        return view("pedido.list1")->with(['pedidos' => $objPedido]);
    }

    public function create()
    {
        $pedido_tamanhos= PedidoTamanho::all();
        return view("pedido.create1")->with(['pedido_tamanhos' => $pedido_tamanhos]);
    }

    public function store(Request $request, $id)
    {
        Validator::make($request->all(), Pedido::rules(), Pedido::message())->validate();

        if ($id == 0) {
        $pedidos = new Pedido;
        $pedidos->nomeproduto = $request->nomeproduto;
        $pedidos->tipoproduto = $request->tipoproduto;
        $pedidos->pedido_tamanho_id = $request->pedido_tamanho_id;
        $pedidos->fins = $request->fins;

        $pedidos->save();

    return \redirect()-> action('PedidoController@index')-> with ('success', 'Registro Incluido Com Sucesso');

} else {

    $pedidos = Pedido::find($id);
    $pedidos->nomeproduto = $request->nomeproduto;
    $pedidos->tipoproduto = $request->tipoproduto;
    $pedidos->pedido_tamanho_id = $request->pedido_tamanho_id;
    $pedidos->fins = $request->fins;

    $pedidos->save();

    return \redirect()-> action('PedidoController@index')-> with ('success', 'Registro Incluido Com Sucesso');
    }}

    public function edit($id)
    {
        $objPedido= Pedido::find($id);
        $pedido_tamanhos = PedidoTamanho:: all();

        return view("pedido.edit1")->with(['pedidos' => $objPedido, 'pedido_tamanhos' =>$pedido_tamanhos]);
    }

    public function destroy($id )
    {
        $pedidos = Pedido:: findOrFail($id);

        $pedidos->delete();

        return \redirect()->action('PedidoController@index')-> with ('error', 'Registro Removido Com Sucesso');
}

    public function search(Request $request)
{
     if($request->tipo=="nomeproduto"){
         $objResult = Pedido:: where('nomeproduto', 'like', "%" . $request->valor . "%") ->paginate(8);
     }else if($request->tipo=="tipoproduto"){
         $objResult = Pedido:: where('tipoproduto','like', "%" . $request->valor . "%") -> paginate(8);
     }

     return view("pedido.list1")->with(['pedidos' => $objResult]);

}
}

