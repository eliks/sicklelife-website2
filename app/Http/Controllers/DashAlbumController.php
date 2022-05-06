<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\AlbumImage;
use App\Models\Image;
use App\Models\EventitemCategory;
use App\Http\Requests\StoreDashAlbumRequest;
use App\Http\Requests\AddAlbumImageRequest;

class DashAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['active_menu'] = "album";
        $data['albums'] = Album::query()->latest()->get();
        return view('dashboard.album.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['active_menu'] = "album";
        $data['album_categories'] = EventitemCategory::all();
        $data['images'] = Image::all();

        return view('dashboard.album.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashAlbumRequest $request)
    {
        $data = $request->validated();
        $data["category_id"] = $data["album_category"];
        $data["image_id"] = $data["headline-image"];
        $data["added_by_id"] = auth()->user()->id;

        Album::create($data);

        return redirect(route('dashboard.album.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['active_menu'] = "album";
        $data["album"] = Album::with("category", "addedBy", "images")->findOrFail($id);
        $data["addable_images"] = Image::whereNotIn("id", $data["album"]->images->pluck("id")->toArray())->get(["id", "name"]);
        return view("dashboard.album.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['active_menu'] = "album";
        $data['album_categories'] = EventitemCategory::all();
        $data['images'] = Image::all();
        $data["album"] = Album::findOrFail($id);

        return view("dashboard.album.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDashAlbumRequest $request, $id)
    {
        $data = $request->validated();
        $album = Album::findOrFail($id);
        $data["category_id"] = $data["album_category"];
        $data["image_id"] = $data["headline-image"];

        $album->update($data);

        return redirect(route('dashboard.album.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function addImage(AddAlbumImageRequest $request, Album $album)
    {
        $data = $request->validated();

        AlbumImage::create([
            "album_id" => $album->id,
            "image_id" => $data["add_image"],
            "added_by_id" => auth()->user()->id
        ]);

        return redirect()->back();
    }

    public function removeImage(AddAlbumImageRequest $request, Album $album)
    {
        $data = $request->validated();

        AlbumImage::where("album_id", $album->id)->where("image_id", $data["add_image"])->delete();

        return redirect()->back();
    }
}
