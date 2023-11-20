<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequentQuestion extends Model
{
    use HasFactory;

    protected $table = 'frequent_questions';

    protected $fillable = [
        'name', 'detail', 'order',
    ];
    
}
