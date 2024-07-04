<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pdf = glob(realpath(asset('storage/pdf/cheridanh/*.*')));
        $image = glob(realpath(asset('assets/img/*.*')));
        return [
            'title' => $this->faker->sentence(3, false),
            'slug' => $this->faker->slug(),
            'report' => $this->faker->randomElement($pdf),
            'cover' => $this->faker->randomElement($image),
        ];
    }
}
