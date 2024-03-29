<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $casts = [
        'meta' => 'array',
    ];

    protected $fillable = [
        'course_category_id', 'course_subarea_id', 'name', 'slug', 'zoho_code', 'title1', 'title2', 'title3', 'title3_image',
        'slider', 'image', 'badge', 'certificate',
        'start_of_classes', 'schedule', 'duration', 'price', 'subtitle', 'modality',
        'download_video', 'brochure', 'video_id', 'objective', 'audience', 'benefits',
        'order', 'meta',
    ];

    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function course_subarea()
    {
        return $this->belongsTo(CourseSubarea::class);
    }

    public function workers()
    {
        return $this->belongsToMany(Worker::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
