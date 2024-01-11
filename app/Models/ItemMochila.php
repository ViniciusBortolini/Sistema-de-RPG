<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMochila extends Model
{
    use HasFactory;
    protected $table = 'itens_mochila';

    public function mochila()
    {
        return $this->belongsTo(Mochila::class, 'id_mochila');
    }

    public function arma()
    {
        return $this->belongsTo(Arma::class, 'id_arma');
    }
}
