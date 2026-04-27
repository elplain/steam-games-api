<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_rating')->insert( [
            [ "rating_id" => 1, "job_listing_id" => 1],
            [ "rating_id" => 10, "job_listing_id" => 2],
            [ "rating_id" => 1, "job_listing_id" => 3],
            [ "rating_id" => 1, "job_listing_id" => 4],
            [ "rating_id" => 6, "job_listing_id" => 4],
            [ "rating_id" => 7, "job_listing_id" => 4],
            [ "rating_id" => 1, "job_listing_id" => 5],
            [ "rating_id" => 1, "job_listing_id" => 6],
            [ "rating_id" => 2, "job_listing_id" => 6],
            [ "rating_id" => 7, "job_listing_id" => 7],
            [ "rating_id" => 9, "job_listing_id" => 7],
            [ "rating_id" => 1, "job_listing_id" => 8],
            [ "rating_id" => 2, "job_listing_id" => 8],
            [ "rating_id" => 1, "job_listing_id" => 9],
            [ "rating_id" => 2, "job_listing_id" => 9],
            [ "rating_id" => 1, "job_listing_id" => 10],
            [ "rating_id" => 2, "job_listing_id" => 10],
            [ "rating_id" => 1, "job_listing_id" => 11],
            [ "rating_id" => 2, "job_listing_id" => 11],
            [ "rating_id" => 1, "job_listing_id" => 12],
            [ "rating_id" => 1, "job_listing_id" => 13],
            [ "rating_id" => 2, "job_listing_id" => 13],
            [ "rating_id" => 1, "job_listing_id" => 14],
            [ "rating_id" => 3, "job_listing_id" => 14],
            [ "rating_id" => 1, "job_listing_id" => 15],
            [ "rating_id" => 2, "job_listing_id" => 15],
            [ "rating_id" => 1, "job_listing_id" => 16],
            [ "rating_id" => 2, "job_listing_id" => 16],
            [ "rating_id" => 7, "job_listing_id" => 17],
            [ "rating_id" => 1, "job_listing_id" => 17],
            [ "rating_id" => 1, "job_listing_id" => 18],
            [ "rating_id" => 2, "job_listing_id" => 18],
            [ "rating_id" => 1, "job_listing_id" => 19],
            [ "rating_id" => 2, "job_listing_id" => 19],
            [ "rating_id" => 1, "job_listing_id" => 20],
            [ "rating_id" => 2, "job_listing_id" => 20],
            [ "rating_id" => 1, "job_listing_id" => 21],
            [ "rating_id" => 3, "job_listing_id" => 21],
            [ "rating_id" => 1, "job_listing_id" => 22],
            [ "rating_id" => 10, "job_listing_id" => 22],
            [ "rating_id" => 1, "job_listing_id" => 23],
            [ "rating_id" => 11, "job_listing_id" => 23],
            [ "rating_id" => 12, "job_listing_id" => 23],
            [ "rating_id" => 1, "job_listing_id" => 24],
            [ "rating_id" => 11, "job_listing_id" => 24],
            [ "rating_id" => 12, "job_listing_id" => 24],
            [ "rating_id" => 1, "job_listing_id" => 25],
            [ "rating_id" => 11, "job_listing_id" => 25],
            [ "rating_id" => 12, "job_listing_id" => 25],
            [ "rating_id" => 1, "job_listing_id" => 26],
            [ "rating_id" => 11, "job_listing_id" => 26],
            [ "rating_id" => 12, "job_listing_id" => 26],
            [ "rating_id" => 5, "job_listing_id" => 27],
            [ "rating_id" => 10, "job_listing_id" => 27],
            [ "rating_id" => 13, "job_listing_id" => 27],
            [ "rating_id" => 5, "job_listing_id" => 28],
            [ "rating_id" => 10, "job_listing_id" => 28],
            [ "rating_id" => 13, "job_listing_id" => 28],
            [ "rating_id" => 8, "job_listing_id" => 29],
            [ "rating_id" => 9, "job_listing_id" => 29],
            [ "rating_id" => 5, "job_listing_id" => 30],
            [ "rating_id" => 10, "job_listing_id" => 30],
            [ "rating_id" => 13, "job_listing_id" => 30],
            [ "rating_id" => 1, "job_listing_id" => 31],
            [ "rating_id" => 1, "job_listing_id" => 32],
            [ "rating_id" => 4, "job_listing_id" => 32]
        ]);
        $this->command->info('Seeded the Relationships of Ratings to Jobs!');
    }
}
