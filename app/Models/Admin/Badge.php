<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $table = 'badges';

    protected $casts = [
        'skills' => 'array',
    ];

    protected $fillable = [
        'course_area_id', 'category', 'name', 'slug', 'type', 'level', 'time',
        'criterion1', 'criterion2', 'detail', 'skills', 'image', 'image2', 'order', 
    ];

    public function course_area()
    {
        return $this->belongsTo(CourseArea::class);
    }
}
