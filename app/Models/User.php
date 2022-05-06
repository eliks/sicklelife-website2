<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'user_type_id', 'added_by_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function type()
    {
        return $this->belongsTo("App\Models\UserType", "user_type_id");
    }

    public function addedBy()
    {
        return $this->belongsTo("App\Models\User", "added_by_id");
    }

    public function getAddedByNameAttribute()
    {
        return $this->addedBy?$this->addedBy->name:"-";
    }

    public function getTypeNameAttribute()
    {
        return $this->type?$this->type->name:"-";
    }
}
