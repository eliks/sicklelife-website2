<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['published', 'title', 'description', 'category_id', 'image_id', 'author_id', 'added_by_id', 'listing_date'];

    public function scopePublished($query, bool $value=true)
    {
        return $query->where('albums.published', $value);
    }
    
    public function image()
    {
        return $this->belongsTo("App\Models\Image");
    }
    
    public function images()
    {
        return $this->belongsToMany("App\Models\Image", "album_images");
    }

    public function addedBy()
    {
        return $this->belongsTo("App\Models\User", "added_by_id");
    }

    public function author()
    {
        return $this->belongsTo("App\Models\Author");
    }

    public function category()
    {
        return $this->belongsTo("App\Models\EventitemCategory");
    }

    public function getAddedByNameAttribute()
    {
        return $this->addedBy?$this->addedBy->name:"-";
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

    public function getUrlAttribute()
    {
        return route('album.show', ['id' => $this->id, 'slug'=>Str::slug($this->title)]);
    }
}
