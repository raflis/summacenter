<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $table = 'course_categories';

    protected $fillable = [
        'course_area_id', 'name', 'slug', 'order',
    ];

    public function course_area()
    {
        return $this->belongsTo(CourseArea::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
