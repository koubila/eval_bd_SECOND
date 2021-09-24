<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    public function personnages()
    {
        return $this->hasMany(Personnage::class);
    }
}
