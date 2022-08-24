<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    protected $fillable = [
        'name', 'slug', 'order',
    ];

    public function blog_posts()
    {
        return $this->hasManyThrough(BlogPost::class, BlogSubCategory::class)->where('status', 'PUBLISHED');
    }

    public function blog_subcategories()
    {
        return $this->hasMany(BlogSubCategory::class)->orderBy('order', 'Asc');
    }
}
