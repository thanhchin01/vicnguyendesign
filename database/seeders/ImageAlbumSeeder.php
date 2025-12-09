<?php

namespace Database\Seeders;

use App\Models\ImageAlbum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ImageAlbum::insert([
            [
                'id' => 1,
                'title' => 'General Album',
                'slug' => 'general-album',
                'image' => 'https://vicnguyendesign.org/uploads/static/general_album_cover.jpg',
                'content' => 'This is a general image album.',
                'status' => 1,
                'type' => 'general',
                'position' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Portfolio Album',
                'slug' => 'portfolio-album',
                'image' => 'https://vicnguyendesign.org/uploads/static/portfolio_album_cover.jpg',
                'content' => 'This is the main portfolio album.',
                'status' => 1,
                'type' => 'portfolio',
                'position' => 2,
            ],
            [
                'id' => 3,
                'title' => 'Logo Album',
                'slug' => 'logo-album',
                'image' => 'https://vicnguyendesign.org/uploads/static/logo_album_cover.jpg',
                'content' => 'This album contains logo related images.',
                'status' => 1,
                'type' => 'logo',
                'position' => 3,
            ]
        ]);
    }
}
