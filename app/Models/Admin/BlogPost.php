<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'blog_sub_category_id', 'name', 'slug', 'image1', 'image2', 'summary', 'body', 'status', 'featured', 'order',
    ];

    public function blog_sub_category()
    {
        return $this->belongsTo(BlogSubCategory::class);
    }

    public function blog_tags()
    {
        return $this->belongsToMany(BlogTag::class);
    }
}
