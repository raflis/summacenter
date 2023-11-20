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
        return $this->hasMany(BlogPost::class)->where('status', 'PUBLISHED')->orderBy('order', 'Asc');
    }
}
