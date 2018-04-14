<?php

namespace MihaiBlebea\GenericApp\Traits;

use MihaiBlebea\GenericApp\Models\Role;

trait HasRoleTrait
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles')->withTimestamps();
    }

    public function hasRole(String $role_name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $role_name)
            {
                return true;
            }
        }
        return false;
    }
}
