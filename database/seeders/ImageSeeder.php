<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\ImageAlbum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $basePath = 'ckfinder/userfiles/files/portfolio/';
        $imageData = [
            [
                'title' => 'Lagoona Binh Chau resort 01',
                'image' => $basePath . '1.jpg',
                'position' => 1,
            ],
            [
                'title' => 'USA school 07',
                'image' => $basePath . '2.png',
                'position' => 2,
            ],
            [
                'title' => 'USA school 06',
                'image' => $basePath . '3.png',
                'position' => 3,
            ],

              // Các ảnh còn lại (sẽ hiển thị ở layout Masonry)
            [
                'title' => 'USA school 03',
                'image' => $basePath . '4.png',
                'position' => 4,
            ],
            [
                'title' => 'Small garden, Jack Bian, the USA',
                'image' => $basePath . '5.png',
                'position' => 5,
            ],
            [
                'title' => 'Ross Reisidence - Matt Peterson.USA.002',
                'image' => $basePath . '6.png',
                'position' => 6,
            ],
            [
                'title' => 'USA school 031',
                'image' => $basePath . '7.png',
                'position' => 7,
            ],
            [
                'title' => 'Small garden, Jack Bian, the USA111',
                'image' => $basePath . '8.png',
                'position' => 8,
            ],
            [
                'title' => 'Ross Reisidence - Matt Peterson.USA.0022',
                'image' => $basePath . '9.png',
                'position' => 9,
            ],
        ];

        foreach ($imageData as $data) {
            DB::table('images')->insert([
                'title'  => $data['title'],
                'slug'   => Str::slug($data['title']),
                'image'  => $data['image'],
                'content'=> null,
                'album_id' => 2,
                'status' => 1,
                'position' => $data['position'],
                'created_by' => 1,
            ]);
        }
    }
}
