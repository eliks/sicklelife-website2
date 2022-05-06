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
                "name" => date('YmdHis-')."Sickle Life Team",
                "image_url" => "template/assets/images/team.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 2,
                "name" => date('YmdHis-')."Media Engagement",
                "image_url" => "template/assets/images/media-engagement2.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 3,
                "name" => date('YmdHis-')."Medical Services",
                "image_url" => "template/assets/images/medical-services.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 4,
                "name" => date('YmdHis-')."Education",
                "image_url" => "template/assets/images/education.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 5,
                "name" => date('YmdHis-')."Sadat",
                "image_url" => "template/assets/images/sadat.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 6,
                "name" => date('YmdHis-')."CSD",
                "image_url" => "template/assets/images/what_is_scd.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 7,
                "name" => date('YmdHis-')."CS Day",
                "image_url" => "template/assets/images/scd-2019.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 8,
                "name" => date('YmdHis-')."Harmattan",
                "image_url" => "template/assets/images/harmattan.jpg",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 9,
                "name" => date('YmdHis-')."Sickle status",
                "image_url" => "template/assets/images/sicklestatus.jpeg",
            ]
        );
    }
}
