<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'clientes';
    protected $fillable = ["nome", "cliente_genero_id", "sobrenome", "cidade", "estado", "email", "telefone"];

    public static function rules()
    {
        return[
            'nome'=> 'required|max:30',
            'sobrenome'=> 'required|max:40',
            'cliente_genero_id'=> 'required',
            'cidade'=>'required|max:40',
            'estado'=>'required|max:40',
            'email'=>'required|max:40',
            'telefone'=>'required|max:40',

        ];
    }

    public static function message()
    {
        return[
            'nome.required' => 'O campo do nome é obrigatório.',
            'nome.max' => 'No campo nome só é permitido 30 caracteres.',
            'sobrenome.required'=> 'O campo do sobrenome é obrigatório.',
            'sobrenome.max' => 'No campo sobrenome só é permitido 40 caracteres.',
            'cliente_genero_id.required' => 'O campo do Genero é obrigatório.',
            'cidade.required' => 'O campo da cidade é obrigatório.',
            'cidade.max' => 'No campo cidade só é permitido 40 caracteres.',
            'estado.required' => 'O campo do estado é obrigatório.',
            'estado.max' => 'No campo estado só é permitido 40 caracteres.',
            'email.required' => 'O campo do email é obrigatório.',
            'email.max' => 'No campo email só é permitido 40 caracteres.',
            'telefone.required' => 'O campo do telefone é obrigatório.',
            'telefone.max' => 'No campo telefone só é permitido 40 caracteres.',

        ];
    }
//relaçao 1-1 (aqui utilizamos o belongTo)
    public function generos(){
        return $this-> belongsTo(ClienteGenero:: class, 'cliente_genero_id', 'id');
    }
}
