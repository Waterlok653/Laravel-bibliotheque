<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =[
        'id',
        'prenom',
        'nom',
        'dateNaissence',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
