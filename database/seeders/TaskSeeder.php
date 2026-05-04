<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // TODO Day 4: create 30 tasks distributed across the existing projects
        Task::factory()->count(30)->create([
            'project_id' => Project::inRandomOrder()->first()->id,
            'assigned_to_id' => User::inRandomOrder()->first()->id,
        ]);
    }
}