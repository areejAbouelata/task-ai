<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CLientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'areejibrahim222@gmial.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'admin',
                'email' => 'superuser@info.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
