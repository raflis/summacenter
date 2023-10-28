<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $casts = [
        'meta' => 'array',
    ];

    protected $fillable = [
        'blog_category_id', 'name', 'slug', 'image1', 'image2', 'summary', 'body', 'status', 'featured', 'order', 'meta',
    ];

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blog_tags()
    {
        return $this->belongsToMany(BlogTag::class);
    }
}
