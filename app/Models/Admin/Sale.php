<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $casts = [
        'detail' => 'array',
    ];

    protected $fillable = [
        'amount', 'currency', 'purchase_number', 'card', 'transaction_date',
        'brand', 'status', 'detail', 'paid',
        'invoice_name', 'invoice_department', 'invoice_district', 'invoice_address',
        'invoice_telephone', 'invoice_email', 'user_name', 'user_lastname',
        'user_type_document', 'user_document', 'user_department', 'user_district',
        'user_address', 'user_email',
    ];

    public function scopeName($query, $name)
    {
        if($name):
            return $query->Where('invoice_name', 'LIKE', "%$name%");
        endif;
    }

    public function scopePaid($query, $name)
    {
        if($name):
            return $query->Where('status', 'LIKE', "%$name%");
        endif;
    }

    public function scopeStartdate($query, $name)
    {
        if($name):
            return $query->WhereDate('transaction_date', '>=', "$name");
        endif;
    }

    public function scopeEnddate($query, $name)
    {
        if($name):
            return $query->WhereDate('transaction_date', '<=', "$name");
        endif;
    }

}
