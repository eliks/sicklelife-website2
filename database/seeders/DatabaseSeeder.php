<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(EventitemCategorySeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(BlogitemSeeder::class);
        $this->call(EventItemSeeder::class);
        $this->call(TeamMemberSeeder::class);
        $this->call(AlbumSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
