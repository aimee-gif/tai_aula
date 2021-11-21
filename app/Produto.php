<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = ["nomeproduto1", "codigo1", "tipoproduto1", "quantidadepedidos1", "estoque1"];

    public static function rules()
    {
    return[
        'nomeproduto1'=> 'required|max:80',
        'codigo1'=> 'required|max:80',
        'tipoproduto1'=>'required|max:20',
        'quantidadepedidos1'=>'required|max:80',
        'estoque1'=>'required|max:20',


    ];
    }

    public static function message()
    {
        return[
            'nomeproduto1.required' => 'O campo Nome do Produto é obrigatório.',
            'nomeproduto1.max' => 'No campo nome do produto só é permitido 80 caracteres.',
            'codigo1.required'=> 'O campo Código é obrigatório',
            'codigo1.max' => 'No campo código só é permitido 20 caracteres.',
            'tipoproduto1.required' => 'O campo Tipo do Produto é obrigatório.',
            'tipoproduto1.max' => 'No campo tipo do produto só é permitido 80 caracteres.',
            'quantidadepedidos1.required' => 'O campo Quantidade de Pedidos é obrigatório.',
            'quantidadepedidos1.max' => 'No campo quantidade de pedidos só é permitido 20 caracteres.',
            'estoque1.required' => 'O campo Em Estoque é obrigatório.',
            'estoque1.max' => 'No campo em estoque só é permitido 80 caracteres.',

        ];
    }
}
