<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\AlbumBasket;

class AlbumBasketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_baskets')->delete();

        AlbumBasket::create(["album_id" => 1, "basket_id" => 5, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 1, "basket_id" => 3, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 1, "basket_id" => 2, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 2, "basket_id" => 1, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 2, "basket_id" => 2, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 3, "basket_id" => 3, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 3, "basket_id" => 5, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 4, "basket_id" => 1, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 4, "basket_id" => 3, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 5, "basket_id" => 2, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 5, "basket_id" => 3, "added_by_id" => 1]);
        AlbumBasket::create(["album_id" => 5, "basket_id" => 4, "added_by_id" => 1]);
    }
}
