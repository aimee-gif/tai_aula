<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantidade extends Model
{
    protected $table = 'quantidades';

    protected $fillable = ["quantidades"];

    //relaçao muitos para muitos
    public function pedidos(){
        return $this->belongsToMany(Pedidos::class, 'quantidades','quantidade_id', 'id');
    }
}
