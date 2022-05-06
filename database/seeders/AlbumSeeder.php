<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlbumImage;
use App\Models\Album;
use DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->delete();

        $album = Album::create(
            [
                "title" => "Team work is expedient",
                "category_id" => 1,
                "author_id" => 2,
                "listing_date" => "2021/02/23",
                "image_id" => 1,
            ]
        );
        AlbumImage::create(["album_id" => $album->id, "image_id" => 1, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 3, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 2, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 5, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 6, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 7, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 4, "added_by_id" => 1]);

        $album = Album::create(
            [
                "title" => "SickleLife Media Awareness Campaigns",
                "category_id" => 2,
                "author_id" => 2,
                "listing_date" => "2020/10/23",
                "image_id" => 2,
            ]
        );
        AlbumImage::create(["album_id" => $album->id, "image_id" => 7, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 3, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 2, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 8, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 9, "added_by_id" => 1]);

        $album = Album::create(
            [
                "title" => "Medical Services - Outreach",
                "category_id" => 3,
                "author_id" => 2,
                "listing_date" => "2020/01/23",
                "image_id" => 3,
            ]
        );
        AlbumImage::create(["album_id" => $album->id, "image_id" => 7, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 4, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 9, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 5, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 6, "added_by_id" => 1]);

        $album = Album::create(
            [
                "title" => "SickleLife Youth Education Seminar",
                "category_id" => 2,
                "author_id" => 2,
                "listing_date" => "2019/02/23",
                "image_id" => 4,
            ]
        );
        AlbumImage::create(["album_id" => $album->id, "image_id" => 4, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 8, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 7, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 5, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 6, "added_by_id" => 1]);

        $album = Album::create(
            [
                "title" => "SickleLife Living Legends Series",
                "description" => "This is in recognition of the many struggles persons living with sickle cell disease undergo daily. It is a clarion call through our posts to our readers to make the best of their situation, despite the odds and enjoy each moment for its inherent beauty. It also encourages us to seek knowledge about sickle cell disease daily, as if each were our last.",
                "category_id" => 4,
                "author_id" => 2,
                "listing_date" => "2019/01/03",
                "image_id" => 5,
            ]
        );
        AlbumImage::create(["album_id" => $album->id, "image_id" => 5, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 8, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 2, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 4, "added_by_id" => 1]);
        AlbumImage::create(["album_id" => $album->id, "image_id" => 6, "added_by_id" => 1]);
    }
}
