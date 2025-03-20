<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Category;
use App\Models\Admin\Period;
use App\Models\Admin\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => '',
             'email' => '',
             'password' => '',
         ]);
         $categories = Category::factory(3)->create();
         $periods = Period::factory(3)->create();
         Project::factory(20)
             ->make()
             ->each(function ($project) use ($categories, $periods) {
                 $project->category()->associate($categories->random());
                 $project->period()->associate($periods->random());
                 $project->save();
             });
    }
}
