<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=> 'Admin ITJEN',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);


        User::create([
            'name'=> 'TU ITJEN',
            'level' => 'usertu',
            'email' => 'tu@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name'=> 'Auditor ITJEN',
            'level' => 'auditor',
            'email' => 'auditor@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

             User::create([
            'name'=> 'APP1 ITJEN',
            'level' => 'App1',
            'email' => 'app1@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name'=> 'APP2 ITJEN',
            'level' => 'App2',
            'email' => 'app2@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
                User::create([
            'name'=> 'APP3 ITJEN',
            'level' => 'App3',
            'email' => 'app3@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}

