<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    private $relationship = [
        [
            'user_id' => 1,
            'role_id' => 1
        ],
        [
            'user_id' => 1,
            'role_id' => 2
        ]
    ];

    public function run()
    {
        foreach($this->relationship as $relationship)
        {
            DB::table('user_roles')->insert([
                'user_id' => $relationship['user_id'],
                'role_id' => $relationship['role_id']
            ]);
        }
    }
}
