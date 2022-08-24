<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSubCategory extends Model
{
    use HasFactory;

    protected $table = 'blog_sub_categories';

    protected $fillable = [
        'blog_category_id', 'name', 'slug', 'order',
    ];
    
    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blog_posts()
    {
        return $this->hasMany(BlogPost::class)->where('status', 'PUBLISHED');
    }
}
