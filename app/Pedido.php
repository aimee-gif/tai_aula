<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ["nomeproduto", "tipoproduto", "pedido_tamanho_id", "fins"];

    public static function rules()
    {
        return[
        'nomeproduto'=> 'required|max:80',
        'tipoproduto'=> 'required|max:80',
        'pedido_tamanho_id'=> 'required',
        'fins'=>'required|max:80',



    ];
    }

    public static function message()
    {
        return[
            'nomeproduto.required' => 'O campo Nome do Produto é obrigatório.',
            'tipoproduto.required'=> 'O campo Tipo do Produto é obrigatório.',
            'tipoproduto.max' => 'No campo tipo do produto só é permitido 80 caracteres.',
            'pedido_tamanho_id.required' => 'O campo do Tamanho é obrigatório.',
            'fins.required' => 'O campo Para Quais Fins? é obrigatório.',
            'fins.max' => 'No campo para quais fins? só é permitido 80 caracteres.',
        ];
    }
//Utilizando o belongto relaçao 1-n
    public function pedidos(){
        return $this-> belongsTo(PedidoTamanho:: class, 'pedido_tamanho_id', 'id');
    }

    // relacionamento 1 para 1
    public function codigo(){
        return $this-> belongsTo(Codigo:: class, 'codigo_id', 'id');
    }

    //muitos para muitos
    public function quantidades(){
        return $this-> belongsToMany(Quantidade:: class, 'quantidades','pedido_id', 'quantidade_id');
    }
}
