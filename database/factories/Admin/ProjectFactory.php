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
        $pdf = public_path("assets/img/");
        $image = public_path("storage/pdf/cheridanh/");
        return [
            'title' => $this->faker->sentence(6, true),
            'slug' => $this->faker->slug(),
            'report' => $this->faker->filePath($pdf),
            'cover' => $this->faker->filePath($image),
        ];
    }
}
