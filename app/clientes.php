<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'email',
        'telefone'
         ];


        protected $table = 'clientes';

        public function pedidos(){

            return $this->hasMany(pedidos::class, 'cliente_id');//relacionamento de 1 para muitos 
}

}
