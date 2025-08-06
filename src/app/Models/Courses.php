<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'ID','institucion', 'denominacion', 'descripcion', 'imagen', 'caracteristicas', 
        'duracion', 'requisitos', 'certificacion', 'modalidad', 'examen', 
        'programa_de_estudio', 'show_purchase_button', 'tipo', 'precio'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_course', 'course_id', 'category_id');
    }
    public function institution()
    {
        return $this->belongsTo(Institutions::class, 'institucion', 'id');
    }
}