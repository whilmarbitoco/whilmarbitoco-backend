<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'github',
        'image',
        'languages'
    ];

    protected $cast = [
        'languages' => 'json'
    ];
}
