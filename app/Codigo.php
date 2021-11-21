<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $table = 'codigos';

    protected $fillable = ["nomeproduto", "siglaproduto"];

    //1 para 1 relacionamento
    public function pedidos(){
        return $this->hasOne(Pedidos::class, 'codigo_id', 'id' );
    }
}
