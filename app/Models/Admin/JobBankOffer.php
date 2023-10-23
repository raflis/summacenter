<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobBankOffer extends Model
{
    use HasFactory;

    protected $table = 'job_bank_offers';

    protected $fillable = [
        'status', 'job_bank_user_id', 'name', 'slug', 'title', 'requirements', 'responsibilities', 
        'benefits', 'detail', 'job_type', 'department', 'address',
        'category', 'end_offer', 'salary',
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

    public function scopeJobType($query, $name)
    {
        if($name):
            return $query->Where('job_type', 'LIKE', "%$name%");
        endif;
    }

    public function job_bank_user()
    {
        return $this->belongsTo(JobBankUser::class);
    }

    public function job_bank_applicants()
    {
        return $this->hasMany(JobBankApplicant::class);
    }

}
