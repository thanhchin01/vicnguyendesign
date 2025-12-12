<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $basePath = 'ckfinder/userfiles/files/member/';
        Members::insert([
            [
                'name'      => 'Vic Nguyen',
                'avatar'    => $basePath . '1.png',
                'position'  => 'CEO & Lead 3D Architish',
                'graduate'  => 'Đại học QUốc Gia Hà Nội',
                'join'      => '2024/10/1',
                'project'   => 'NGUYET HOUSE, LUU HOUSE, RESORT ABC',
                'award'     => 'abc'
            ],
            [
                'name'      => 'Nga Nguyen',
                'avatar'    => $basePath . '2.png',
                'position'  => 'Animation 3D',
                'graduate'  => 'Đại học ABC',
                'join'      => '2024/10/1',
                'project'   => 'NGUYET HOUSE, LUU HOUSE, RESORT ABC',
                'award'     => 'abc'
            ],
            [
                'name'      => 'Linh Nguyen',
                'avatar'    => $basePath . '3.png',
                'position'  => '3D Architish',
                'graduate'  => 'Đại học 123',
                'join'      => '2024/10/1',
                'project'   => 'NGUYET HOUSE, LUU HOUSE, RESORT ABC',
                'award'     => 'abc'
            ],
            [
                'name'      => 'Hoàng Nguyen',
                'avatar'    => $basePath . '4.png',
                'position'  => 'Desiginer',
                'graduate'  => 'Đại học QUốc Gia Hà Nội',
                'join'      => '2024/10/1',
                'project'   => 'NGUYET HOUSE, LUU HOUSE, RESORT ABC',
                'award'     => 'abc'
            ]
        ]);
    }
}
