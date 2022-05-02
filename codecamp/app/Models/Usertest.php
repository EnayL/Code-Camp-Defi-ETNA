<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usertest extends Authenticatable

{
    use HasFactory;

    protected $fillable = [
        'login',
        'role',
        'password',
    ];
}

