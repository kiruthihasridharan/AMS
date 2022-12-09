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
        DB::table('users')->insert(['firstname' => 'Kiruthiha',//Str::random(10),
            'lastname' => 'Sridharan',//Str::random(10),
            'email' => 'Kiruthiha@gmail.com',//Str::random(10).'@gmail.com', 
            'password' => Hash::make('athi98'),
            //'gender'=>'female',
            'role'=>'admin',  
            'remember_token' => Str::random(10), ]);
             // \App\Models\User::factory(10)->create();
       
             DB::table('courses')->insert(['semester' => 1,//Str::random(10),
             'courseunit' => 'CSC301G3',//Str::random(10),
             'coursename' => 'Rapid Application Development',]);

             DB::table('courses')->insert(['semester' => 1,//Str::random(10),
             'courseunit' => 'CSC302G3',//Str::random(10),
             'coursename' => 'Data Communication and Computer Networks ',]);

             
             DB::table('courses')->insert(['semester' => 1,//Str::random(10),
             'courseunit' => 'CSC303G3',//Str::random(10),
             'coursename' => 'Graphics and visual Computing ',]);

             
             DB::table('courses')->insert(['semester' => 1,//Str::random(10),
             'courseunit' => 'CSC304G3',//Str::random(10),
             'coursename' => 'Computer Programming-III ',]);

             DB::table('courses')->insert(['semester' => 1,//Str::random(10),
             'courseunit' => 'CSC305G3',//Str::random(10),
             'coursename' => 'Team Software Project ',]);


             DB::table('courses')->insert(['semester' => 2,//Str::random(10),
             'courseunit' => 'CSC308S3',//Str::random(10),
             'coursename' => 'Artificial Intelligence',]);

             DB::table('courses')->insert(['semester' => 2,//Str::random(10),
             'courseunit' => 'CSC309S3',//Str::random(10),
             'coursename' => 'High Performance Computing',]);

             DB::table('courses')->insert(['semester' => 2,//Str::random(10),
             'courseunit' => 'CSC311S3',//Str::random(10),
             'coursename' => 'Machine Learning',]);
    }




}

