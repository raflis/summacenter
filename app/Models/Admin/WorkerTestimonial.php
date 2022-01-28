<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerTestimonial extends Model
{
    use HasFactory;

    protected $table = 'worker_testimonials';

    protected $fillable = [
        'name', 'description', 'image', 'order',
    ];
}
