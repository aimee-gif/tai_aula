<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

//relaçao 1-1 (aqui utilizamos o hasOne)
class ClienteGenero extends Model
{
    protected $table = 'cliente_genero';
    protected $fillable = ["genero", "sigla"];

    public function clientes(){
        return $this -> hasOne(Clientes::class, 'cliente_genero_id', 'id');
    }
}
