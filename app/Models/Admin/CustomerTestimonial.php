<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTestimonial extends Model
{
    use HasFactory;

    protected $table = 'customer_testimonials';

    protected $fillable = [
        'name', 'acquired_project', 'description', 'image', 'image_mobile', 'order',
    ];
}
