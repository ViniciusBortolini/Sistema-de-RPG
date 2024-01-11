<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    protected $table = 'mochilas';

    public function personagem()
    {
        return $this->hasOne(Personagem::class);
    }

    public function itensMochila()
    {
        return $this->hasMany(ItemMochila::class);
    }
}
