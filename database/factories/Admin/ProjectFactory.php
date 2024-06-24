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
        return [
            'title' => $this->faker->sentence(6, true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(2, true),
            'report' => $this->faker->filePath(realpath(public_path("assets/img/"))),
            'cover' => $this->faker->filePath(realpath(public_path("storage/pdf/cheridanh/"))),
        ];
    }
}
