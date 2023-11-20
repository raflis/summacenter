<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $table = 'manuals';

    protected $fillable = [
        'name', 'detail', 'order',
    ];
    
}
