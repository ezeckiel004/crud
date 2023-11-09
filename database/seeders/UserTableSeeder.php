<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create(
            [
                "name" => "jean",
                "email" => "jean@gmail.com",
                "password" => Hash::make("jean1523"),
                "role_id" => 1
            ],


        );

        User::create(
            [
                "name" => "moise",
                "email" => "moise@gmail.com",
                "password" => Hash::make("moisen1523"),
                "role_id" => 2
            ],

        );

        User::create(
          
            
            [
                "name" => "abel",
                "email" => "abel@gmail.com",
                "password" => Hash::make("abel1523"),
                "role_id" => 3
            ],

        );
           
    }
}
