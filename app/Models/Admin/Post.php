<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'name', 'slug', 'excerpt', 'body', 'body', 'author', 'author_description', 'status', 'image', 'order',
    ];
}
