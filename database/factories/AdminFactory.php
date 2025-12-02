<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'username'      => fake()->unique()->userName(),
            'fullname'      => fake()->name(),
            'email'         => fake()->unique()->safeEmail(),
            'password'      => Hash::make('password'),
            'phone'         => fake()->phoneNumber(),
            'avatar'        => 'default.png',
            'gender'        => fake()->randomElement([0,1,2]), //0:khác, 1:Nam, 2:Nữ
            'date_of_birth' => fake()->date('Y-m-d', '2001-01-12'),
            'remember_token'=> Str::random(10),
        ];
    }
}
