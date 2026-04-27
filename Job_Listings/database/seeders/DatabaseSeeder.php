<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;

use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
        ]);

        $this->call([
            JobSeeder::class,
            EmployerJobSeeder::class,
            JobRatingSeeder::class,
        ]);
        Job::factory(50)->create();
    }
}
