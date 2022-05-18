<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers';

    protected $fillable = [
        'course_area_id', 'type', 'fullname', 'image', 'position', 'telephone',
        'email', 'item1', 'item2', 'item3', 'order',
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
