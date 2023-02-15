<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
    use HasFactory;

    protected $fillable = [
        'chaussure_id',
        'pourcentage_reduction',
        'date_debut',
        'date_fin'
    ];
}
