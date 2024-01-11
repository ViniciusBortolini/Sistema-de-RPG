<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    
    protected $table = "personagens";

    // Relacionamento com a arma primária
    public function armaPrimaria()
    {
        return $this->belongsTo(Arma::class, 'arma_primaria_id');
    }

    // Relacionamento com a arma secundária
    public function armaSecundaria()
    {
        return $this->belongsTo(Arma::class, 'arma_secundaria_id');
    }

    // Relacionamento com a mochila
    public function mochila()
    {
        return $this->belongsTo(Mochila::class);
    }

    // Relacionamento com as habilidades (muitos para muitos)
    public function habilidades()
    {
        return $this->belongsToMany(Habilidade::class);
    }
}
