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

        $imageData = [
            [
                'title' => 'Lagoona Binh Chau resort 01',
                'image' => '1.jpg',
                'position' => 1,
            ],
            [
                'title' => 'USA school 07',
                'image' => '2.png',
                'position' => 2,
            ],
            [
                'title' => 'USA school 06',
                'image' => '3.png',
                'position' => 3,
            ],

              // Các ảnh còn lại (sẽ hiển thị ở layout Masonry)
            [
                'title' => 'USA school 03',
                'image' => '4.png',
                'position' => 4,
            ],
            [
                'title' => 'Small garden, Jack Bian, the USA',
                'image' => '5.png',
                'position' => 5,
            ],
            [
                'title' => 'Ross Reisidence - Matt Peterson.USA.002',
                'image' => '6.png',
                'position' => 6,
            ],
            [
                'title' => 'USA school 031',
                'image' => '7.png',
                'position' => 7,
            ],
            [
                'title' => 'Small garden, Jack Bian, the USA111',
                'image' => '8.png',
                'position' => 8,
            ],
            [
                'title' => 'Ross Reisidence - Matt Peterson.USA.0022',
                'image' => '9.png',
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
