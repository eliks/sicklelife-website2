<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventitem;
use App\Models\Blogitem;
use App\Models\TeamMember;
use App\Models\Basket;
use App\Models\Album;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("home.index");
        return view('home');
    }

    public function aboutus()
    {
        return view("home.aboutus");
    }

    public function team()
    {
        $data["core_teammembers"] = TeamMember::where("displayed_as_teammember",1)->orderBy("sort_rank")->get();
        return view("home.team", $data);
    }

    public function blog()
    {
        $data["listed_blogs"] = Blogitem::orderBy("created_at", "DESC")->get();

        return view("home.blog", $data);
    }

    public function blogShow($id)
    {
        $data["listed_blog"] = Blogitem::findOrFail($id);
        $data["similar_blogs"] = Blogitem::where("id", "<>", $id)->get()->random(4);

        return view("home.blog_show", $data);
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

    public function albumShow($id, $lug)
    {
        $data["album"] = Album::published()->with("images")->findOrFail($id);
        return view("home.gallerydetails", $data);
    }

    public function gallery()
    {
        // $data["albums"] = collect(
        //     [
        //         [
        //             "title" => "Team work is expedient",
        //             "category" => "SickleLife",
        //             "ref" => "team-work-is-expedient",
        //             "author" => "Veronica Owusu",
        //             "date" => "Feb. 23, 2021",
        //             "img_url" => asset("template/assets/images/team.jpg"),
        //         ],
        //         [
        //             "title" => "SickleLife Media Awareness Campaigns",
        //             "category" => "Education",
        //             "ref" => "team-work-is-expedient",
        //             "author" => "Veronica Owusu",
        //             "date" => "Oct. 23, 2020",
        //             "img_url" => asset("template/assets/images/media-engagement2.jpg"),
        //         ],
        //         [
        //             "title" => "Medical Services - Outreach",
        //             "category" => "Healthcare",
        //             "ref" => "medical-services",
        //             "author" => "Veronica Owusu",
        //             "date" => "Jan. 23, 2020",
        //             "img_url" => asset("template/assets/images/medical-services.jpg"),
        //         ],
        //         [
        //             "title" => "SickleLife Youth Education Seminar",
        //             "category" => "Education",
        //             "ref" => "youth-education-seminar",
        //             "author" => "Veronica Owusu",
        //             "date" => "Feb. 23, 2019",
        //             "img_url" => asset("template/assets/images/education.jpg"),
        //         ],
        //         [
        //             "title" => "SickleLife Living Legends Series",
        //             "category" => "Life Style",
        //             "ref" => "living-legend-series",
        //             "author" => "Veronica Owusu",
        //             "date" => "Jan. 3, 2019",
        //             "img_url" => asset("template/assets/images/sadat.jpg"),
        //         ]
        //     ]
        // );

        $data["baskets"] = Basket::whereHas("albums")->orderBy("sort_rank", "DESC")->get();
        $data["albums"] = Album::with("image", "baskets")->published()->orderBy("listing_date", "DESC")->get();

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