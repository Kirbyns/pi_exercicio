<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'preco',
         ];


        protected $table = 'produtos';
}
