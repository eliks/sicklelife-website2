<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BasketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baskets')->delete();

        // 1
        DB::table('baskets')->insert([
            'name'   =>  'Awareness',
            'description'   =>  'Our albums related to awareness events',
            'sort_rank'   =>  1,
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 2
        DB::table('baskets')->insert([
            'name'   =>  'Anniversaries',
            'description'   =>  'All our anniversary related albums',
            'sort_rank'   =>  1,
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 3
        DB::table('baskets')->insert([
            'name'   =>  'Our People',
            'description'   =>  'Albums celebrating our people',
            'sort_rank'   =>  1,
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 4
        DB::table('baskets')->insert([
            'name'   =>  'Outreach',
            'description'   =>  'Albums our outreach activities',
            'sort_rank'   =>  1,
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // 5
        DB::table('baskets')->insert([
            'name'   =>  'Advocacy',
            'description'   =>  'Our advocacy efforts',
            'sort_rank'   =>  1,
            'added_by_id'   =>  1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
