<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBadge extends Model
{
    use HasFactory;

    protected $table = 'issued_badges';

    protected $casts = [
        //
    ];

    protected $fillable = [
        'hash', 'name', 'image', 'description', 'type_category', 'level', 'time_to_earn',
        'cost', 'badge_template_activities', 'skills', 'issued_to', 'recipient_email' 
    ];

}
