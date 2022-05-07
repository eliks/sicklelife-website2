<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDashTeammemberRequest;
use App\Models\TeamMember;
use App\Models\Image;

class DashTeammemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['active_menu'] = "teammember";
        $data['teammembers'] = TeamMember::query()->latest()->get();
        return view('dashboard.teammember.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['active_menu'] = "teammember";
        $data['images'] = Image::query()->orderBy("name")->get();

        return view('dashboard.teammember.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashTeammemberRequest $request)
    {
        $data = $request->validated();
        $data["image_id"] = $data["photo"];
        $data["displayed_as_teammember"] = $data["display_as_team_member"];
        $data["added_by_id"] = auth()->user()->id;

        TeamMember::create($data);

        return redirect(route("dashboard.teammember.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['active_menu'] = "teammember";

        $data["teammember"] = TeamMember::with("image")->findOrFail($id);

        return view("dashboard.teammember.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['active_menu'] = "teammember";
        $data["teammember"] = TeamMember::findOrFail($id);
        $data['images'] = Image::query()->orderBy("name")->get();

        return view("dashboard.teammember.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDashTeammemberRequest $request, $id)
    {
        $teammember = TeamMember::findOrFail($id);
        $data = $request->validated();
        $data["image_id"] = $data["photo"];
        $data["displayed_as_teammember"] = $data["display_as_team_member"];

        $teammember->update($data);
        $teammember;

        return redirect(route("dashboard.teammember.index"));
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
