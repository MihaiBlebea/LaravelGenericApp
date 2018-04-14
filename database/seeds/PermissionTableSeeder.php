<?php

use Illuminate\Database\Seeder;
use MihaiBlebea\GenericApp\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    private $permissions = [
        [
            'action' => 'edit'
        ],
        [
            'action' => 'approve'
        ],
        [
            'action' => 'delete'
        ]
    ];

    public function run()
    {
        foreach($this->permissions as $permission)
        {
            Permission::create([
                'action' => $permission['action']
            ]);
        }
    }
}
