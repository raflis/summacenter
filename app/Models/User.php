<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'role',
        'name',
        'lastname',
        'type_document',
        'document',
        'birthday',
        'telephone',
        'career',
        'position',
        'address',
        'department',
        'district',
        'invoice_name',
        'invoice_address',
        'invoice_department',
        'invoice_district',
        'invoice_telephone',
        'invoice_email',
        'company_name',
        'company_document',
        'company_address',
        'company_telephone',
        'avatar',
        'email',
        'password',
    ];
    //MTTBT-00063910-2022
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
