<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'sort_rank', 'added_by_id'];
    protected $appends = ["image_url"];

    public function getAddedByNameAttribute()
    {
        return $this->addedBy?$this->addedBy->name:"-";
    }
    
    public function albums()
    {
        return $this->belongsToMany("App\Models\Album", "album_baskets");
    }

    public function addedBy()
    {
        return $this->belongsTo("App\Models\User", "added_by_id");
    }

    public function getImageUrlAttribute()
    {
        return $this->albums[0]?$this->albums[0]->image_url:"";
    }
}
