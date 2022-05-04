<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogitemAuthor extends Model
{
    use HasFactory;

    protected $fillable = ['blogitem_id', 'author_id', 'added_by_id'];
}
