<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'UserOne',
                'email' => 'userone@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'UserTwo',
                'email' => 'usertwo@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'UserThree',
                'email' => 'userthree@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'UserFour',
                'email' => 'userfour@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}