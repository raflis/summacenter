<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $table = 'sell';

    protected $casts = [
        'sell_sliders' => 'array',
        'steps' => 'array',
    ];

    protected $fillable = [
        'sell_sliders', 'title', 'description', 'steps', 'terms',
    ];
}
