<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobBankApplicant extends Model
{
    use HasFactory;

    protected $table = 'job_bank_applicants';

    protected $fillable = [
        'job_bank_user_id', 'job_bank_offer_id',
    ];

    public function job_bank_user()
    {
        return $this->belongsTo(JobBankUser::class);
    }

    public function job_bank_offer()
    {
        return $this->belongsTo(JobBankOffer::class);
    }

}
