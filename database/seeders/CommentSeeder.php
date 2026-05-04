<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        // TODO Day 4: create 50 comments distributed across the existing tasks
        Comment::factory()->count(50)->create([
            'task_id' => Task::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
        ]);
    }
}