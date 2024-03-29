<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    protected $table = 'blog_tags';

    protected $casts = [
        'meta' => 'array',
    ];

    protected $fillable = [
        'name', 'slug', 'meta',
    ];

    public function blog_posts()
    {
        return $this->belongsToMany(BlogPost::class)->where('status', 'PUBLISHED');
    }
}
