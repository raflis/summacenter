<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubarea extends Model
{
    use HasFactory;

    protected $table = 'course_subareas';

    protected $fillable = [
        'name', 'slug', 'order',
    ];
}
