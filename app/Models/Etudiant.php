<?php

// App\Models\Etudiant.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'cin',
        'cne',
        'email',
        'rapport', 
    ];
}

