<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table = 'armas'; 
    
    public function personagens()
    {
        return $this->hasMany(Personagem::class);
    }
}