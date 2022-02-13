<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventitem extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo("App\Models\Image");
    }

    public function author()
    {
        return $this->belongsTo("App\Models\Author");
    }

    public function category()
    {
        return $this->belongsTo("App\Models\EventitemCategory");
    }

    public function getCategoryStrAttribute()
    {
        return $this->category?$this->category->name:"-";
    }

    public function getImageUrlAttribute()
    {
        return $this->image?$this->image->image_url:"";
    }

    public function getAuthorNameAttribute()
    {
        return $this->author?$this->author->name:"";
    }
}
