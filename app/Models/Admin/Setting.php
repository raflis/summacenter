<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'address', 'telephone', 'email', 'facebook', 'instagram', 'linkedin', 'youtube', 'whatsapp', 'script', 'zoho_token',
        'map', 'button_name', 'button_link',
    ];
    
}
