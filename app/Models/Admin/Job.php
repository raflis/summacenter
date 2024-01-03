<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'name', 'slug', 'company', 'summary', 'department',
        'work_modality', 'workload', 'description', 'email', 'status', 
    ];

    public function scopeName($query, $name)
    {
        if($name):
            return $query->Where('name', 'LIKE', "%$name%");
        endif;
    }

    public function scopeDepartment($query, $name)
    {
        if($name):
            return $query->Where('department', 'LIKE', "%$name%");
        endif;
    }

    public function scopeWorkModality($query, $name)
    {
        if($name):
            return $query->Where('work_modality', 'LIKE', "%$name%");
        endif;
    }

    public function scopeWorkload($query, $name)
    {
        if($name):
            return $query->Where('workload', 'LIKE', "%$name%");
        endif;
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

}
