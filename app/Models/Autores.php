<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    protected $table = 'Autores';
    protected $fillable = ['nombre','nacionalidad'];
}
