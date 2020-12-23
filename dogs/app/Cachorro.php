<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
  protected $fillable = [
      'cor', 'porte', 'pelagem','descricao','imagem','nome','telefone'
  ];
}
