<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chaussure extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'nom_chaussure',
        'description',
        'nombre_disponoble',
        'marque'
    ];
}
