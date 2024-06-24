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
             'name' => 'Chéridanh',
             'email' => 'admin-portfolio@cheridanh.cg',
             'password' => 'Kethur@1122-Admin',
         ]);
         $category = Category::factory(3)->create();
         $period = Period::factory(3)->create();
         Project::factory(50)
             ->hasAttached($period->random(1), $category->random(1))
             ->create();
    }
}
