<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $casts = [
        'infos' => 'array',
        'locations' => 'array',
        'spaces' => 'array',
        'plans' => 'array',
        'sliders' => 'array',
    ];

    protected $fillable = [
        'type', 'type_project_id', 'type_property_id', 'district_id', 'name', 'slug', 'infos', 'description',
        'description_index', 'sliders', 'image_index', 'image_form', 'title1',
        'descripcion1', 'image1', 'map', 'locations', 'spaces', 'plans', 'status', 'order'
    ];

    public function scopeTypeProject($query, $name)
    {
        if($name):
            return $query->Where('type_project_id', '=', "$name");
        endif;
    }

    public function scopeTypeProperty($query, $name)
    {
        if($name):
            return $query->Where('type_property_id', '=', "$name");
        endif;
    }

    public function scopeDistrict($query, $name)
    {
        if($name):
            return $query->Where('district_id', '=', "$name");
        endif;
    }

    public function type_property()
    {
        return $this->belongsTo(Category::class);
    }

    public function type_project()
    {
        return $this->belongsTo(Category::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function enviroments()
    {
        return $this->belongsToMany(Enviroment::class)->orderBy('order','Asc')->withPivot('order')->withTimestamps();
    }
}
