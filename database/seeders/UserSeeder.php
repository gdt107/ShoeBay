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
     *
     * @return void
     */
    public function run()
    {
        //
        // $table->id();
        // $table->string('username')->unique();
        // $table->string('email')->unique();
        // $table->string('password');
        // $table->timestamps();

        DB::table('user')->insert([
            'username' => 'darren',
            'email' => 'darren@binus.com',
            'password' => Hash::make('54321')
        ]);
    }
}
