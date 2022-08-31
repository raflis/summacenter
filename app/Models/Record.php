<?php

namespace App\Models;

use App\Models\Admin\Flag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    protected $table = 'records';

    protected $fillable = [
        'name', 'lastname', 'email', 'type_document', 'document', 'flag_id', 'telephone',
        'interested_course', 'company', 'ruc', 'position', 'call_sms', 'from', 'observation',
    ];

    public function flag()
    {
        return $this->belongsTo(Flag::class);
    }

    public function scopeName($query, $name)
    {
        if($name):
            return $query->Where('name', 'LIKE', "%$name%");
        endif;
    }

    public function scopeLastname($query, $name)
    {
        if($name):
            return $query->Where('lastname', 'LIKE', "%$name%");
        endif;
    }

    public function scopeStartdate($query, $name)
    {
        if($name):
            return $query->WhereDate('created_at', '>=', "$name");
        endif;
    }

    public function scopeEnddate($query, $name)
    {
        if($name):
            return $query->WhereDate('created_at', '<=', "$name");
        endif;
    }
}
