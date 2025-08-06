<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    use HasFactory;

    protected $fillable = ['denominacion', 'img_path'];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'category_course', 'category_id', 'course_id');
    }
}
