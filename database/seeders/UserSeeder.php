<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Suman Regmi',
            'email'=>'suman@gmail.com',
            'gender'=>'male',
            'dob'=>'2000-01-01',
            'phone'=>'9800000000',
            'password'=>'password',
            'profile_image'=>'images/user/mainAdmin.jpg',
            'role'=> 'admin'
        ]);
        DB::table('users')->insert([
            'name'=>'Greece Dahal',
            'email'=>'admin@gmail.com',
            'gender'=>'male',
            'dob'=>'2010-01-01',
            'phone'=>'9807040261',
            'password'=>'password',
            'profile_image'=>'images/user/greece.jpg',
            'role'=> 'admin'
        ]);
        DB::table('users')->insert([
            'name'=>'Menuka Dahal',
            'email'=>'employer@gmail.com',
            'gender'=>'female',
            'dob'=>'2000-01-01',
            'phone'=>'9800000002',
            'password'=>'password',
            'profile_image'=>'images/user/meuka.jpu.jpg',
            'role'=> 'employer'
        ]);
        DB::table('users')->insert([
            'name'=>'john rai',
            'email'=>'employee@gmail.com',
            'gender'=>'male',
            'dob'=>'2000-01-01',
            'phone'=>'9800000001',
            'password'=>'password',
            'profile_image'=>'images/user/default.jpg',
            'role'=> 'employee'
        ]
    );
    }
}