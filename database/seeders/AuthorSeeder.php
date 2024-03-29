<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();

        DB::table('authors')->insert(
            [
                "name" => "Dr. Sefakor Enam Bankas",
                "image_id" => 1,
            ]
        );

        DB::table('authors')->insert(
            [
                "name" => "Veronica Owusu",
                "image_id" => 2,
            ]
        );

        DB::table('authors')->insert(
            [
                "name" => "The Sickle Life Editorial Team",
                "image_id" => 3,
            ]
        );

        DB::table('authors')->insert(
            [
                "name" => "Dr. Sefakor Enam Bankas and Aaron Tabi",
                "image_id" => 3,
            ]
        );
    }
}
