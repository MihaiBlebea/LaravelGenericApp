<?php

use Illuminate\Database\Seeder;
use MihaiBlebea\GenericApp\Models\Role;

class RoleTableSeeder extends Seeder
{
    private $roles = [
        [
            'name'        => 'admin',
            'description' => 'This is the admin role'
        ],
        [
            'name'        => 'guest',
            'description' => 'This is the guest role'
        ],
        [
            'name'        => 'editor',
            'description' => 'This is the editor role'
        ],
        [
            'name'        => 'writer',
            'description' => 'This is the writer role'
        ],
    ];

    public function run()
    {
        foreach($this->roles as $role)
        {
            Role::create([
                'name'        => $role['name'],
                'description' => $role['description']
            ]);
        }
    }
}
