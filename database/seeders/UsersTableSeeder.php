<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        
        $user = User::create([
            'name'   =>  'Elisha',
            'email'   =>  'elishasenoo@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('james111'),
            'user_type_id'   =>  3,
            'added_by_id'   =>  1,
        ]);
        
        $user = User::create([
            'name'   =>  'Vero',
            'email'   =>  'pheronicaowusu@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('james417james'),
            'user_type_id'   =>  2,
            'added_by_id'   =>  1,
        ]);
    }
}
