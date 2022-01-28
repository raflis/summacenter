<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $casts = [
        'service_sliders' => 'array',
        'service_items' => 'array',
    ];

    protected $fillable = [
        'service_sliders', 'service_title', 'service_description', 'service_items', 'btn1_text', 'btn1_link',
        'title1', 'image1', 'description1', 'title2', 'image2', 'description2', 'title3', 'image3', 'description3',
    ];
}
