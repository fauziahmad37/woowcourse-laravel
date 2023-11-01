<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TabelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'admin',
            'email' => 'admin@woowcourse.com',
            'password' => Hash::make('admin'),
            'user_level' => 1,
            'last_login' => date('Y-m-d H:i:s'),
            'active' => 1
        ]);
    }
}
