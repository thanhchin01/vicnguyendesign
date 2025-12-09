<?php

namespace Database\Seeders;

use App\Models\NewsCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsCategories::insert([
            [
                'name'  => 'Sự kiện',
                'slug' => 'su-kien',
                'descriptions'   => 'Danh mục tin tức về các sự kiện nổi bật',
            ],
            [
                'name'  => 'Thông tin',
                'slug' => 'thong-tin',
                'descriptions'   => 'Danh mục tin tức về các thông tin nổi bật',
            ],
            [
                'name'  => 'Thành tích',
                'slug' => 'thanh-tich',
                'descriptions'   => 'Danh mục tin tức về các thành tích nổi bật',
            ],
        ]);
    }
}
