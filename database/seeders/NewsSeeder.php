<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //
        News::create([
            'title'      => 'Tin tức mẫu',
            'slug'       => 'tin-tuc-mau',
            'image'      => asset('assect/image/Alpha/image1.jpg'),
            'sumary'     => 'Tốm tắt tin tức',
            'date'       => now(),
            'content'    => 'Nội dung tin tức mẫu',
            'new_category_id' => 1,
            'created_by' => 1,
        ]);
    }
}
