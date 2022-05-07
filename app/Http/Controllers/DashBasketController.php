<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Album;
use App\Http\Requests\StoreDashBasketRequest;

class DashBasketController extends Controller
{
    public function index()
    {
        $data['active_menu'] = "image";
        $data['baskets'] = Basket::with("albums", "addedBy")->latest()->get();
        return view('dashboard.basket.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['active_menu'] = "image";
        
        return view('dashboard.basket.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashBasketRequest $request)
    {
        $data = $request->validated();
        $data["added_by_id"] = auth()->user()->id;

        Basket::create($data);

        return redirect(route("dashboard.basket.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['active_menu'] = "image";
        $data["basket"] = Basket::with("albums", "addedBy")->findOrFail($id);
        $data["addable_albums"] = Album::whereNotIn("id", $data["basket"]->albums->pluck("id")->toArray())->get(["id", "title"]);
        
        return view("dashboard.basket.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['active_menu'] = "image";
        
        $data["basket"] = Basket::findOrFail($id);

        return view("dashboard.basket.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDashBasketRequest $request, Basket $basket)
    {
        $data = $request->validated();

        $basket->update($data);

        return redirect(route("dashboard.basket.index"));
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

    public function addAlbum(Request $request, Basket $basket)
    {
        return $basket;
    }
}
