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


        DB::table('images')->insert(
            [
                "id" => 10,
                "name" => date('YmdHis-')."Dr. Sefakor Enam Bankas",
                "image_url" => "template/team/dr_sefakor4.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 11,
                "name" => date('YmdHis-')."Veronica Owusu",
                "image_url" => "template/team/vero.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 12,
                "name" => date('YmdHis-')."Prisca Dede Tetteh",
                "image_url" => "template/team/prisca.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 13,
                "name" => date('YmdHis-')."Naomi  Akom Okadja",
                "image_url" => "template/team/naomi.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 14,
                "name" => date('YmdHis-')."Serian Emefa Agbenya",
                "image_url" => "template/team/emefa2.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 15,
                "name" => date('YmdHis-')."Nathaniel Dela Seneadza",
                "image_url" => "template/team/nathaniel.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 16,
                "name" => date('YmdHis-')."Ruth Owusu Boateng",
                "image_url" => "template/team/ruth.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 17,
                "name" => date('YmdHis-')."Felix Amanor Otu",
                "image_url" => "template/team/felix.png",
            ]
        );

        DB::table('images')->insert(
            [
                "id" => 18,
                "name" => date('YmdHis-')."Sefakor Aku Biddah",
                "image_url" => "template/team/sefakor.png",
            ]
        );
    }
}
