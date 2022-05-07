<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use App\Http\Requests\StoreDashUserRequest;
use App\Http\Requests\UpdateDashUserRequest;

use Hash;

class DashUserController extends Controller
{
    public function index()
    {
        $data['active_menu'] = "users";
        $data['users'] = User::query()->latest()->get();
        return view('dashboard.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['active_menu'] = "users";
        $data['user_types'] = UserType::query()->orderBy("name")->get(["id", "name"]);
        // $data['images'] = Image::query()->orderBy("name")->get(["id", "name", "image_url"]);
        // $data['categories'] = EventitemCategory::query()->orderBy("name")->get(["id", "name"]);
        return view('dashboard.user.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashUserRequest $request)
    {
        $data = $request->validated();
        $data["user_type_id"] = $data["user_type"];
        $data["password"] = Hash::make($data["password"]);
        $data["added_by_id"] = auth()->user()->id;

        User::create($data);

        return redirect(route("dashboard.user.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['active_menu'] = "users";
        $data["user"] = User::with("type", "addedBy")->findOrFail($id);
        
        return view("dashboard.user.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['active_menu'] = "users";
        
        $data["user"] = User::findOrFail($id);

        $data['user_types'] = UserType::query()->orderBy("name")->get(["id", "name"]);

        return view("dashboard.user.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashUserRequest $request, User $user)
    {
        $data = $request->validated();
        $data["user_type_id"] = $data["user_type"];

        $user->update($data);

        return redirect(route("dashboard.user.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
