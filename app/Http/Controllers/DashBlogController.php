<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDashBlogRequest;
use App\Models\Blogitem;
use App\Models\BlogitemAuthor;
use App\Models\TeamMember;
use App\Models\Image;
use App\Models\EventitemCategory;

class DashBlogController extends Controller
{
    public function index()
    {
        // return Blogitem::first()->authors;
        $data['active_menu'] = "blog";
        $data['blogitems'] = Blogitem::query()->with('image', 'authors', 'category')->latest()->get();
        return view('dashboard.blog.index', $data);
    }

    public function create(Request $request)
    {
        $data['active_menu'] = "blog";
        $data['authors'] = TeamMember::query()->orderBy("name")->get(["id", "name"]);
        $data['images'] = Image::query()->orderBy("name")->get(["id", "name", "image_url"]);
        $data['categories'] = EventitemCategory::query()->orderBy("name")->get(["id", "name"]);
        return view('dashboard.blog.create', $data);
    }

    public function store(StoreDashBlogRequest $request)
    {
        $data = $request->validated();

        $data["category_id"] = $data["category"];
        $data["image_id"] = $data["headline-image"];
        // $data["author_id"] = $data["authors"];
        $data["added_by_id"] = auth()->user()->id;

        $blogitem = Blogitem::create($data);

        foreach($data["authors"] as $author){
            BlogitemAuthor::create([
                "blogitem_id" => $blogitem->id,
                "author_id" => $author,
                "added_by_id" => auth()->user()->id,
            ]);
        }
        
        return redirect(route('dashboard.blog.index'));
    }
}
