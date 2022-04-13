<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exemplaire extends Model
{
    protected $fillable =[
        'id',
        'etat',
        'id_livre',
        'isbn',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
