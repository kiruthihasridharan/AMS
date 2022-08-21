<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'Kiruthiha',//Str::random(10),
            'email' => 'Kiruthiha@gmail.com',//Str::random(10).'@gmail.com', 
            'password' => Hash::make('athi98'),
            //'gender'=>'female',
            'role'=>'admin',  
            'remember_token' => Str::random(10), ]);
             // \App\Models\User::factory(10)->create();
        DB::table('users')->insert(['name' => 'Thulakshan',//Str::random(10),
             'email' => 'Thulu@gmail.com',//Str::random(10).'@gmail.com', 
             'password' => Hash::make('thulu98'),
             //'gender'=>'female',
             'role'=>'student',  
             'remember_token' => Str::random(10), ]);
    }
}

