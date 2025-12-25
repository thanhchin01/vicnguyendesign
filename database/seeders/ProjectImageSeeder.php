<?php

namespace Database\Seeders;

use App\Models\ProjectImage;
use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $data = [
            'da-nang-villa' => [
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/6.png',
            ],

            'nguyet-house' => [
                '/ckfinder/userfiles/files/portfolio/7.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
                '/ckfinder/userfiles/files/portfolio/4.png',
            ],

            'luu-house' => [
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
            ],

            'vin-home' => [
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
            ],

            'abc-house' => [
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
            ],

            '123-house' => [
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
            ],

            'at-house' => [
                '/ckfinder/userfiles/files/portfolio/3.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
                '/ckfinder/userfiles/files/portfolio/2.png',
            ]
        ];
        foreach ($data as $slug => $images) {
            $project = Projects::where('slug', $slug)->first();
            if (!$project) {
                continue; // tránh lỗi nếu project chưa tồn tại
            }
            foreach ($images as $order => $img) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image'      => $img,
                    'order'      => $order,
                ]);
            }
        }
    }
}
