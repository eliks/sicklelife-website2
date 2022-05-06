<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDashImageRequest;
use App\Http\Requests\UpdateDashImageRequest;
use App\Models\Image;
use App\Models\AlbumImage;

class DashImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['active_menu'] = "image";
        $data['images'] = Image::query()->latest()->get();
        return view('dashboard.image.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['active_menu'] = "image";

        return view('dashboard.image.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashImageRequest $request)
    {
        $data = $request->validated();
        $data['added_by_id'] = auth()->user()->id;
        $data['name'] = date('YmdHis-').$data['name'];

        $file= $request->file('image_file');
        $filename= date('YmdHis-').$file->getClientOriginalName();
        $file-> move(public_path('public/template/assets/images'), $filename);
        $data['image_url']= "public/template/assets/images/$filename";

        $image = Image::create($data);

        return redirect(route('dashboard.image.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['active_menu'] = "image";
        $data["image"] = Image::with("addedBy")->findOrFail($id);
        
        return view("dashboard.image.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['active_menu'] = "image";
        $data["image"] = Image::with("addedBy")->findOrFail($id);

        return view("dashboard.image.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateDashImageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashImageRequest $request, $id)
    {
        $data = $request->validated();

        $image = Image::findOrFail($id);

        $image->update($data);

        return redirect(route("dashboard.image.index"));
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
}
