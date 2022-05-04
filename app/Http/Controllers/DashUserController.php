<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;

class DashUserController extends Controller
{
    public function index()
    {
        $data['active_menu'] = "users";
        $data['users'] = User::query()->latest()->get();
        return view('dashboard.user.index', $data);
    }

    public function create()
    {
        $data['active_menu'] = "users";
        $data['user_types'] = UserType::query()->orderBy("name")->get(["id", "name"]);
        // $data['images'] = Image::query()->orderBy("name")->get(["id", "name", "image_url"]);
        // $data['categories'] = EventitemCategory::query()->orderBy("name")->get(["id", "name"]);
        return view('dashboard.user.create', $data);
    }
}
