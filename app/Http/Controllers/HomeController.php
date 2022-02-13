<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventitem;

class HomeController extends Controller
{
    public function index()
    {
        return view("home.index");
    }

    public function aboutus()
    {
        return view("home.aboutus");
    }

    public function team()
    {
        return view("home.team");
    }

    public function blog()
    {
        return view("home.blog");
    }

    public function events()
    {
        $data["listed_events"] = Eventitem::all();

        return view("home.events", $data);
    }

    public function eventShow($id)
    {
        $data["listed_event"] = Eventitem::findOrFail($id);

        return view("home.event_show", $data);
    }

    public function news()
    {
        return view("home.news");
    }

    public function gallerydetails()
    {
        return view("home.gallerydetails");
    }

    public function gallery()
    {
        $data["albums"] = collect(
            [
                [
                    "title" => "Team work is expedient",
                    "category" => "SickleLife",
                    "ref" => "team-work-is-expedient",
                    "author" => "Veronica Owusu",
                    "date" => "Feb. 23, 2021",
                    "img_url" => asset("template/assets/images/team.jpg"),
                ],
                [
                    "title" => "SickleLife Media Awareness Campaigns",
                    "category" => "Education",
                    "ref" => "team-work-is-expedient",
                    "author" => "Veronica Owusu",
                    "date" => "Oct. 23, 2020",
                    "img_url" => asset("template/assets/images/media-engagement2.jpg"),
                ],
                [
                    "title" => "Medical Services - Outreach",
                    "category" => "Healthcare",
                    "ref" => "medical-services",
                    "author" => "Veronica Owusu",
                    "date" => "Jan. 23, 2020",
                    "img_url" => asset("template/assets/images/medical-services.jpg"),
                ],
                [
                    "title" => "SickleLife Youth Education Seminar",
                    "category" => "Education",
                    "ref" => "youth-education-seminar",
                    "author" => "Veronica Owusu",
                    "date" => "Feb. 23, 2019",
                    "img_url" => asset("template/assets/images/education.jpg"),
                ],
                [
                    "title" => "SickleLife Living Legends Series",
                    "category" => "Life Style",
                    "ref" => "living-legend-series",
                    "author" => "Veronica Owusu",
                    "date" => "Jan. 3, 2019",
                    "img_url" => asset("template/assets/images/sadat.jpg"),
                ]
            ]
        );

        return view("home.gallery", $data);
    }

    public function contactus()
    {
        return view("home.contactus");
    }

    public function makeadonation()
    {
        return view("home.makeadonation");
    }

    public function joinasvolunteer()
    {
        return view("home.joinasvolunteer");
    }
}
