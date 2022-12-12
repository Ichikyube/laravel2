<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminta\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super admin',
            'email' => 'superadmin@gmail.test',
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'),
            'remember_token' => Str::random,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ])
    }
}
