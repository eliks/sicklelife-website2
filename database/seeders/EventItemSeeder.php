<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EventItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventitems')->delete();

        DB::table('eventitems')->insert(
            [
                "title" => "Team work is expedient",
                "brief" => "Team work is expedient",
                "body" => "Team work is expedient",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 2,
                "listing_date" => "Feb. 23, 2021",
                "image_id" => 1,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        DB::table('eventitems')->insert(
            [
                "title" => "SickleLife Media Awareness Campaigns",
                "brief" => "SickleLife Media Awareness Campaigns",
                "body" => "SickleLife Media Awareness Campaigns",
                "category_id" => 2,
                "ref" => "team-work-is-expedient",
                "author_id" => 2,
                "listing_date" => "Oct. 23, 2020",
                "image_id" => 2,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        DB::table('eventitems')->insert(
            [
                "title" => "Medical Services - Outreach",
                "brief" => "Medical Services - Outreach",
                "body" => "Medical Services - Outreach",
                "category_id" => 3,
                "ref" => "medical-services",
                "author_id" => 2,
                "listing_date" => "Oct. 23, 2020",
                "image_id" => 3,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        DB::table('eventitems')->insert(
            [
                "title" => "SickleLife Youth Education Seminar",
                "brief" => "SickleLife Youth Education Seminar",
                "body" => "SickleLife Youth Education Seminar",
                "category_id" => 2,
                "ref" => "youth-education-seminar",
                "author_id" => 2,
                "listing_date" => "Oct. 23, 2020",
                "image_id" => 4,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        DB::table('eventitems')->insert(
            [
                "title" => "SickleLife Living Legends Series",
                "brief" => "SickleLife Living Legends Series",
                "body" => "SickleLife Living Legends Series",
                "category_id" => 4,
                "ref" => "living-legend-series",
                "author_id" => 2,
                "listing_date" => "Oct. 23, 2020",
                "image_id" => 5,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
    }
}
