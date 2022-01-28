<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;

    protected $table = 'aboutus';

    protected $casts = [
        'sliders' => 'array',
        'history_items' => 'array',
        'about_items' => 'array',
    ];

    protected $fillable = [
        'sliders', 'history_title', 'history_description', 'history_items', 'about_title', 'about_description',
        'about_items',
    ];
}
