<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';

    protected $casts = [
        'home_sliders' => 'array',
        'corretaje_sliders' => 'array',
        'project_sliders' => 'array',
        'contact_sliders' => 'array',
        'blog_sliders' => 'array',
        'benefit_items' => 'array',
        'details' => 'array',
        'number_counter' => 'array',
        'popup' => 'array',
    ];

    protected $fillable = [
        'home_sliders', 'corretaje_sliders', 'project_sliders', 'contact_sliders', 'blog_sliders', 'info_title', 'info_description',
        'benefit_items', 'details', 'number_counter', 'address', 'email', 'whatsapp_text',
        'whatsapp1', 'whatsapp2', 'facebook', 'instagram', 'popup',
    ];
}
