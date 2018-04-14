<?php

namespace MihaiBlebea\GenericApp\Traits;

use MihaiBlebea\GenericApp\Models\Role;

trait HasRoleTrait
{
    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_roles')->withTimestamps();
    }
}
