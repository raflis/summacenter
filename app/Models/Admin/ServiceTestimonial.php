<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTestimonial extends Model
{
    use HasFactory;

    protected $table = 'service_testimonials';

    protected $fillable = [
        'name', 'short_phrase', 'description', 'order',
    ];
}
