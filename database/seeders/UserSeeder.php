<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public const USERS_COUNT = 10;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(self::USERS_COUNT)->create();
    }
}
