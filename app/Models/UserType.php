<?php

namespace App\Models;

use App\Traits\PluckableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory, PluckableTrait;
}
