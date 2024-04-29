<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public const TASKS_COUNT = 60;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory(self::TASKS_COUNT)->create();
    }
}
