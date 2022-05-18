<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $casts = [
        'sessions' => 'array',
    ];

    protected $fillable = [
        'course_id', 'name', 'sessions', 'order',
    ];

    public function course()
    {
        return $this->belongsTo(CourseCategory::class);
    }
}
