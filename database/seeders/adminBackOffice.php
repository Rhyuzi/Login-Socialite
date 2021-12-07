<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class adminBackOffice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jumpa',
            'email' => 'admin@example.com',
            'password' => Hash::make('qwerty123'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);
    }
}
