<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintBook extends Model
{
    protected $table = 'complaints_book';

    protected $fillable = [
        'file', 'id_front',
        'type_contact', 'lastname1', 'lastname2', 'name', 'address',
        'type_document', 'document', 'telephone', 'email', 'type_contract', 'type_contract_clasification', 'type_contract_description',
        'claim_type', 'claim_description', 'consumer_request',
    ];
}
