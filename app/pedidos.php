<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'valor',
        'data_do_pedido',
         ];


        protected $table = 'pedidos';


        public function cliente(){

            return $this->belongsTo( clientes::class, 'id');
}

}
