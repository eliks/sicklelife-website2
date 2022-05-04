<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->delete();

        // 1
        DB::table('user_types')->insert([
            'name'   =>  'Regular User',
            'color' => '#2E4CD1',
            'description'   =>  'This is a regular user',
            'code' => 'REG',
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 2
        DB::table('user_types')->insert([
            'name'   =>  'Admin User',
            'color' => '#2E4CD1',
            'description'   =>  'This is an admin user',
            'code' => 'ADM',
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 3
        DB::table('user_types')->insert([
            'name'   =>  'Super User',
            'color' => '#2E4CD1',
            'description'   =>  'This is an super user',
            'code' => 'SUP',
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
