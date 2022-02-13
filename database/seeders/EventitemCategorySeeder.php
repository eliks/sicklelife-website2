<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EventitemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventitem_categories')->delete();

        DB::table('eventitem_categories')->insert(
            [
                "id" => 1,
                "name" => "SickleLife",
                "description" => "SickleLife",
            ]
        );

        DB::table('eventitem_categories')->insert(
            [
                "id" => 2,
                "name" => "Education",
                "description" => "Education",
            ]
        );

        DB::table('eventitem_categories')->insert(
            [
                "id" => 3,
                "name" => "Healthcare",
                "description" => "Healthcare",
            ]
        );

        DB::table('eventitem_categories')->insert(
            [
                "id" => 4,
                "name" => "Life Style",
                "description" => "Life Style",
            ]
        );
    }
}
