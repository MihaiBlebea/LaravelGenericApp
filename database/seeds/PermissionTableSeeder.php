<?php

use Illuminate\Database\Seeder;
use MihaiBlebea\GenericApp\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    private $permissions = [
        [
            'action' => 'can edit'
        ],
        [
            'action' => 'can approve'
        ],
        [
            'action' => 'can delete'
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
