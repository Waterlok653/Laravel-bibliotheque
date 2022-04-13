<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprunt extends Model
{
    protected $fillable =[
        'id',
        'id_exemplaires',
        'id_client',
        'dateDebut',
        'dateFin',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
