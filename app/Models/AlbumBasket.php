<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumBasket extends Model
{
    use HasFactory;

    protected $fillable = ["basket_id", "album_id", "added_by_id"];
}
