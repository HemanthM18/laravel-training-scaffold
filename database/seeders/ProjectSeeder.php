<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // TODO Day 4: create 10 projects using 
        Project::factory()->count(10)->create([
            'user_id' => User::inRandomOrder()->first()->id,
        ]);
    }
}