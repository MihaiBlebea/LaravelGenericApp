<?php

namespace MihaiBlebea\GenericApp\Traits;

use MihaiBlebea\GenericApp\Role;

trait HasRoleTrait
{
    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_roles')->withTimestamps();
    }
}
