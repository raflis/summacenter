<?php

namespace App\Models\Admin;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class JobBankUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'jobbank';

    protected $table = 'job_bank_users';

    protected $casts = [
        'experience' => 'array',
    ];

    protected $fillable = [
        'role', 'name', 'lastname', 'type_document', 'document', 'birthday', 'telephone',
        'career', 'position', 'address', 'summary', 'experience', 'company_name', 'company_document', 'company_address',
        'company_telephone', 'avatar', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopePosition($query, $name)
    {
        if($name):
            return $query->Where('position', 'LIKE', "%$name%");
        endif;
    }

    public function job_bank_offers()
    {
        return $this->hasMany(JobBankOffer::class);
    }

    public function job_bank_applicants()
    {
        return $this->hasMany(JobBankApplicant::class);
    }
}
