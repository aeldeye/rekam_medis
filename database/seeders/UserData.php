<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
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
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('admin2022'),
                'level' => 1,
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'Operator',
                'username' => 'operator',
                'password' => bcrypt('operator2022'),
                'level' => 2,
                'email' => 'operator@gmail.com'
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
