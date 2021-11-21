<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class PedidoTamanho extends Model
{
    protected $table = 'pedido_tamanho';
    protected $fillable = ["tamanho", "unimedida"];

//relaçao 1-N (utilizando hasMany)
    public function pedidos(){
        return $this -> hasMany(Pedidos::class, 'pedido_tamanho_id', 'id');
    }
}
