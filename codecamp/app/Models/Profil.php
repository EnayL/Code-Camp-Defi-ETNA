<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'photo',
        'service',
        'responsable',
        'tags',
        'telephone',
        'email',
    ];

    public $timestamps = false;
}
