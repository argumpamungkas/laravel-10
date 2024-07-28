<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = Faker\Factory::create();
        return [
            'nim' => mt_rand(0000000001, 9999999999),
            'name' => fake()->name(),
            'gender' => Arr::random(['L', 'P']),
            'jurusan_id' => Arr::random([1, 2, 3]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}