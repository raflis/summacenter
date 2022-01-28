<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enviroment extends Model
{
    use HasFactory;

    protected $table = 'enviroments';

    protected $fillable = [
        'name', 'image'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('order')->withTimestamps();
    }
}
