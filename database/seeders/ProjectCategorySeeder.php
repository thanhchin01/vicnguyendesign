<?php

namespace Database\Seeders;

use App\Models\ProjectsCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProjectsCategories::insert([
            [
                'name' => 'Nhà ở',
                'slug' => 'nha-o',
                'description' => 'Danh mục nhà ở',
            ],
            [
                'name' => 'Biệt thự',
                'slug' => 'biet-thu',
                'description' => 'Danh mục biệt thự',
            ],
            [
                'name' => 'Căn hộ chung cư',
                'slug' => 'can-ho-chung-cu',
                'description' => 'Danh mục căn hộ chung cư',
            ],
            [
                'name' => 'Văn phòng',
                'slug' => 'van-phong',
                'description' => 'Danh mục văn phòng',
            ],
            [
                'name' => 'Trung tâm thương mại',
                'slug' => 'trung-tam-thuong-mai',
                'description' => 'Danh mục trung tâm thương mại',
            ],
            [
                'name' => 'Resort',
                'slug' => 'resort',
                'description' => 'Danh mục resort',
            ]
        ]);
    }
}
