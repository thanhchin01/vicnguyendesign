<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //
        $basePath = '/ckfinder/userfiles/files/portfolio/';
        $newsData = [
            [
                'title'             => 'Tin tức mẫu 1',
                'image'             => $basePath . '2.png',
                'sumary'            => 'Tóm tắt tin tức 1',
                'date'              => '2025/01/10',
                'content'           => 'Nội dung tin tức'
            ],
            [
                'title'             => 'Tin tức mẫu 2',
                'image'             => $basePath . '3.png',
                'sumary'            => 'Tóm tắt tin tức 2',
                'date'              => '2025/01/10',
                'content'           => 'Nội dung tin tức'
            ],
            [
                'title'             => 'Tin tức mẫu 3',
                'image'             => $basePath . '4.png',
                'sumary'            => 'Tóm tắt tin tức 3',
                'date'              => '2025/01/10',
                'content'           => 'Nội dung tin tức'
            ],
            [
                'title'             => 'Tin tức mẫu 4',
                'image'             => $basePath . '5.png',
                'sumary'            => 'Tóm tắt tin tức 4',
                'date'              => '2025/01/10',
                'content'           => 'Nội dung tin tức'
            ]

        ];
        foreach ($newsData as $item) {
            DB::table('news')->insert([
                'title'         => $item['title'],
                'slug'          => Str::slug($item['title']),
                'image'         => $item['image'],
                'sumary'        => $item['sumary'],
                'date'          => $item['date'],
                'content'       => $item['content'],
                'new_category_id'   => 1,
                'created_by'        => 1,
            ]);
        }
    }
}
