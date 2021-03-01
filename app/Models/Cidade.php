<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use HasFactory,SoftDeletes;
      /**
     * Retorna dados do relacionamento de Postos com Cidades
     * 
     * 
     * @return Collection 
     */
    public function postos(){
        return $this->hasMany('\App\Models\Posto','cidade_id');
     }
    protected $guarded = [];
}
