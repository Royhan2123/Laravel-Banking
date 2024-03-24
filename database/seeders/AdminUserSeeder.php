<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        DB::table('admin_users')-> inserts([
            "name" => "Sha Admin",
            "email" => "admin@bwabank.com",
            "password" => bcrypt("rahasia123")
        ]);
    }
}
