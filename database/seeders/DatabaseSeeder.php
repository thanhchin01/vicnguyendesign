<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();

        \Illuminate\Support\Facades\DB::table('news')->truncate();
        \Illuminate\Support\Facades\DB::table('news_categories')->truncate();
        \Illuminate\Support\Facades\DB::table('admins')->truncate();
        \Illuminate\Support\Facades\DB::table('images')->truncate();


        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $this->call([
            AdminSeeder::class,
            NewsCategorySeeder::class,
            NewsSeeder::class,
            ProjectCategorySeeder::class,
            ImageAlbumSeeder::class,
            ImageSeeder::class,
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
