<?php

namespace MihaiBlebea\GenericApp\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function user()
    {
        return $this->belongsToMany(config('generic.user_model'), 'user_roles')->withTimestamps();
    }
}
