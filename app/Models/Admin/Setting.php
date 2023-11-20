<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $casts = [
        'links' => 'array',
        'meta_title' => 'array',
        'meta_keyword' => 'array',
        'meta_description' => 'array',
        'pay_mode_text' => 'array',
        'floating_advertising' => 'array',
        'counter_advertising' => 'array',
    ];

    protected $fillable = [
        'address', 'telephone', 'email', 'facebook', 'instagram', 'linkedin', 'youtube', 'whatsapp', 'script', 'zoho_token',
        'map', 'button_name', 'button_link', 'floating_chat', 'floating_text', 'floating_telephone', 'links',
        'meta_title', 'meta_keyword', 'meta_description', 'meta_image', 'pay_mode_text',
        'floating_advertising', 'counter_advertising',
    ];
    
}
