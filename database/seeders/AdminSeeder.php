<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::create([
            'username' => 'vicnguyen',
            'fullname' => 'Vic Nguyen',
            'email'    => 'vicnguyen@gmail.com',
            'password' => Hash::make('12345678'),
            'phone'    => '0123456789',
            'avatar'   => '/ckfinder/userfiles/files/member/1.png',
            'gender'   => 1,
            'date_of_birth' => '1990-01-12'
        ]);
    }
}
