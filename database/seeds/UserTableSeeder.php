<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    private $users = [
        [
            'name'     => 'Mihai Dragomir',
            'email'    => 'mihai@gmail.com',
            'password' => 'intrex'
        ],
        [
            'name'     => 'Bogdan Oprea',
            'email'    => 'bogdan@gmail.com',
            'password' => 'intrex'
        ]
    ];

    public function run()
    {
        foreach($this->users as $user)
        {
            User::create([
                'name'     => $user['name'],
                'email'    => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        }
    }
}
