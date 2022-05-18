<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseArea extends Model
{
    use HasFactory;

    protected $table = 'course_areas';

    protected $fillable = [
        'name', 'slug', 'icon', 'image', 'badge', 'text', 'order',
    ];

    public function course_categories()
    {
        return $this->hasMany(CourseCategory::class);
    }

    public function badges()
    {
        return $this->hasMany(Badge::class)->orderBy('order', 'Asc');
    }
}
