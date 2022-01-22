<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'full_name' => "Hassine Wassef",
            'email' => "hassinewassef@gmail.com",
            'password' => bcrypt('hw')
        ]);
    }
}
