<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    protected $fillable = [
        'ID', 'denominacion', 'descripcion', 'url_logo', 'url_imagen'
    ];
}