<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $casts = [
        'meta' => 'array',
    ];

    protected $fillable = [
        'job_id','name', 'lastname', 'telephone', 'email', 'file', 'status',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

}
