<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'role', 'bio', 'sort_rank', 'sm_facebook', 'sm_twitter', 'sm_instagram', 'sm_linkedin', 'displayed_as_teammember', 'added_by_id', "image_id"];

    public function image()
    {
        return $this->belongsTo("App\Models\Image", "image_id");
    }
    public function addedBy()
    {
        return $this->belongsTo("App\Models\User", "added_by_id");
    }

    public function getImageUrlAttribute()
    {
        return $this->image?$this->image->image_url:"-";
    }

    public function getAddedByNameAttribute()
    {
        return $this->addedBy?$this->addedBy->name:"-";
    }
}
