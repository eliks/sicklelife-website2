<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image_url', 'added_by_id'];

    public function addedBy()
    {
        return $this->belongsTo("App\Models\User", "added_by_id");
    }

    public function getAddedByNameAttribute()
    {
        return $this->addedBy?$this->addedBy->name:"-";
    }
}
