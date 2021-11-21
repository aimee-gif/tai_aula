<?php

namespace App\Http\Controllers;

use App\ClienteGenero;
use App\Clientes;
use App\Mail\SendMailCliente;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ClientesController extends Controller
{

    public function index()
    {
        $objClientes= Clientes::paginate(10);

        return view("cliente.list")->with(['clientes' => $objClientes]);
    }


    public function sendEmail(){

        $cliente=[];
        $cliente['clientes'] = Clientes:: orderBy('nome')->get();

        Mail::to('aimee.r10@aluno.ifsc.edu.br')
        ->send(new SendMailCliente($cliente));

        return \redirect()-> action('ClientesController@index')-> with ('success', 'Email Enviado Com Sucesso');
    }

    /**
    * Show de for creating a new resource.
    *
    * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $cliente_generos= ClienteGenero::all();
        return view("cliente.create")->with(['cliente_generos' => $cliente_generos]);

    }

    /**
    * Store a newly created resourse in storge
    *
    * @param \Illuminate\Http\Request @request
    * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $id)
    {   //dd($request);
        Validator::make($request->all(), Clientes::rules(), Clientes::message())->validate();

        if ($id == 0) {
        $clientes = new Clientes;
        $clientes->nome = $request->nome;
        $clientes->cliente_genero_id= $request->cliente_genero_id;
        $clientes->sobrenome = $request->sobrenome;
        $clientes->cidade = $request->cidade;
        $clientes->estado = $request->estado;
        $clientes->email = $request->email;
        $clientes->telefone = $request->telefone;


        $clientes->save();

    return \redirect()-> action('ClientesController@index')-> with ('success', 'Registro Incluido Com Sucesso');

} else {

    $clientes = Clientes::find($id);
    $clientes->nome = $request->nome;
        $clientes->cliente_genero_id= $request->cliente_genero_id;
        $clientes->sobrenome = $request->sobrenome;
        $clientes->cidade = $request->cidade;
        $clientes->estado = $request->estado;
        $clientes->email = $request->email;
        $clientes->telefone = $request->telefone;

        $clientes->save();

    return \redirect()-> action('ClientesController@index')-> with ('success', 'Registro Incluido Com Sucesso');
    }}


    /**
    * Display the specified resource.
    *
    * @param \App\Clientes $clientes
    * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $objClientes= Clientes::find($id);
        $cliente_generos= ClienteGenero::all();

        return view("cliente.edit")->with(['clientes' => $objClientes, 'cliente_generos' =>$cliente_generos]);

    }


    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Clientes $clientes
    * @return \Illuminate\Http\Response
     */

    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Clientes $clientes
    * @return \Illuminate\Http\Response
     */

    public function destroy($id )
    {
        $clientes = Clientes:: findOrFail($id);

        $clientes->delete();

        return \redirect()->action('ClientesController@index')-> with ('error', 'Registro Removido Com Sucesso');


    }


    public function search(Request $request)
    {
         if($request->tipo=="nome"){
             $objResult = Clientes:: where('nome', 'like', "%" . $request->valor . "%") ->paginate(10);
         }else if($request->tipo=="sobrenome"){
             $objResult = Clientes:: where('sobrenome','like', "%" . $request->valor . "%") -> paginate(10);
         } else if($request->tipo=="cidade"){
            $objResult = Clientes:: where('cidade','like', "%" . $request->valor . "%") -> paginate(10);
         }else if($request->tipo=="estado"){
            $objResult = Clientes:: where('estado','like', "%" . $request->valor . "%") -> paginate(10);
         } else if($request->tipo=="email"){
            $objResult = Clientes:: where('email','like', "%" . $request->valor . "%") -> paginate(10);
         }else if ($request->tipo == "genero") {
            $objResult = Clientes::whereHas('generos', function (Builder $query) use (&$request) {
                $query->where('genero', 'like', "%" . $request->valor . "%");
            })->paginate(10);

         }




         return view("cliente.list")->with(['clientes' => $objResult]);
    }
}

