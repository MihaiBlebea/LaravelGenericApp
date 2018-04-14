<?php

namespace MihaiBlebea\GenericApp\Models;

use Illuminate\Database\Eloquent\Model;
use MihaiBlebea\GenericApp\Models\Role;

class Permission extends Model
{
    protected $fillable = [
        'action'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions')->withTimestamps();
    }
}
