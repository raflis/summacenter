<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    use HasFactory;

    protected $table = 'consultancies';

    protected $casts = [
        'items' => 'array',
    ];

    protected $fillable = [
        'name1', 'name2', 'detail', 'image', 'items', 'order',
    ];

}
