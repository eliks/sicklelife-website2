<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        DB::table('images')->insert(
            [
                "id" => 1,
                "name" => "Sickle Life Team",
                "image_url" => "template/assets/images/team.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 2,
                "name" => "Media Engagement",
                "image_url" => "template/assets/images/media-engagement2.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 3,
                "name" => "Medical Services",
                "image_url" => "template/assets/images/medical-services.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 4,
                "name" => "Education",
                "image_url" => "template/assets/images/education.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 5,
                "name" => "Sadat",
                "image_url" => "template/assets/images/sadat.jpg",
            ]
        );
    }
}
