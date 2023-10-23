<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'image_desktop', 'image_mobile', 'title1', 'title2', 'title3', 'button_name', 'button_link', 'full_link_desktop', 'order'
    ];
    
}
