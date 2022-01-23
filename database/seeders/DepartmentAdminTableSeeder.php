<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartmentAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins_department')->insert([
            'full_name' => "Tarek Jalled",
            'department' => "Informatique",
            'email' => "tj@gmail.com",
            'password' => bcrypt('tjs')
        ]);
    }
}
