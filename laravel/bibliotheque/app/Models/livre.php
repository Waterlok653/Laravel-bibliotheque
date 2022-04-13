<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    protected $fillable =[
        'id',
        'nom',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
