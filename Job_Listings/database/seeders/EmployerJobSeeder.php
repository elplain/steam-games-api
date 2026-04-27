<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployerJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employer_job')->insert( [
            [ "employer_id" => 1, "job_listing_id" => 1],
            [ "employer_id" => 10, "job_listing_id" => 2],
            [ "employer_id" => 1, "job_listing_id" => 3],
            [ "employer_id" => 1, "job_listing_id" => 4],
            [ "employer_id" => 6, "job_listing_id" => 4],
            [ "employer_id" => 7, "job_listing_id" => 4],
            [ "employer_id" => 1, "job_listing_id" => 5],
            [ "employer_id" => 1, "job_listing_id" => 6],
            [ "employer_id" => 2, "job_listing_id" => 6],
            [ "employer_id" => 7, "job_listing_id" => 7],
            [ "employer_id" => 9, "job_listing_id" => 7],
            [ "employer_id" => 1, "job_listing_id" => 8],
            [ "employer_id" => 2, "job_listing_id" => 8],
            [ "employer_id" => 1, "job_listing_id" => 9],
            [ "employer_id" => 2, "job_listing_id" => 9],
            [ "employer_id" => 1, "job_listing_id" => 10],
            [ "employer_id" => 2, "job_listing_id" => 10],
            [ "employer_id" => 1, "job_listing_id" => 11],
            [ "employer_id" => 2, "job_listing_id" => 11],
            [ "employer_id" => 1, "job_listing_id" => 12],
            [ "employer_id" => 1, "job_listing_id" => 13],
            [ "employer_id" => 2, "job_listing_id" => 13],
            [ "employer_id" => 1, "job_listing_id" => 14],
            [ "employer_id" => 3, "job_listing_id" => 14],
            [ "employer_id" => 1, "job_listing_id" => 15],
            [ "employer_id" => 2, "job_listing_id" => 15],
            [ "employer_id" => 1, "job_listing_id" => 16],
            [ "employer_id" => 2, "job_listing_id" => 16],
            [ "employer_id" => 7, "job_listing_id" => 17],
            [ "employer_id" => 1, "job_listing_id" => 17],
            [ "employer_id" => 1, "job_listing_id" => 18],
            [ "employer_id" => 2, "job_listing_id" => 18],
            [ "employer_id" => 1, "job_listing_id" => 19],
            [ "employer_id" => 2, "job_listing_id" => 19],
            [ "employer_id" => 1, "job_listing_id" => 20],
            [ "employer_id" => 2, "job_listing_id" => 20],
            [ "employer_id" => 1, "job_listing_id" => 21],
            [ "employer_id" => 3, "job_listing_id" => 21],
            [ "employer_id" => 1, "job_listing_id" => 22],
            [ "employer_id" => 10, "job_listing_id" => 22],
            [ "employer_id" => 1, "job_listing_id" => 23],
            [ "employer_id" => 11, "job_listing_id" => 23],
            [ "employer_id" => 12, "job_listing_id" => 23],
            [ "employer_id" => 1, "job_listing_id" => 24],
            [ "employer_id" => 11, "job_listing_id" => 24],
            [ "employer_id" => 12, "job_listing_id" => 24],
            [ "employer_id" => 1, "job_listing_id" => 25],
            [ "employer_id" => 11, "job_listing_id" => 25],
            [ "employer_id" => 12, "job_listing_id" => 25],
            [ "employer_id" => 1, "job_listing_id" => 26],
            [ "employer_id" => 11, "job_listing_id" => 26],
            [ "employer_id" => 12, "job_listing_id" => 26],
            [ "employer_id" => 5, "job_listing_id" => 27],
            [ "employer_id" => 10, "job_listing_id" => 27],
            [ "employer_id" => 13, "job_listing_id" => 27],
            [ "employer_id" => 5, "job_listing_id" => 28],
            [ "employer_id" => 10, "job_listing_id" => 28],
            [ "employer_id" => 13, "job_listing_id" => 28],
            [ "employer_id" => 8, "job_listing_id" => 29],
            [ "employer_id" => 9, "job_listing_id" => 29],
            [ "employer_id" => 5, "job_listing_id" => 30],
            [ "employer_id" => 10, "job_listing_id" => 30],
            [ "employer_id" => 13, "job_listing_id" => 30],
            [ "employer_id" => 1, "job_listing_id" => 31],
            [ "employer_id" => 1, "job_listing_id" => 32],
            [ "employer_id" => 4, "job_listing_id" => 32]
        ]);
        $this->command->info('Seeded the Relationships of Jobs to Employers!');
    }
}
