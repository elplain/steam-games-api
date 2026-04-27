<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GameSeederJSON extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $jsonPath = database_path('data/games.json');

        if (!File::exists($jsonPath)) {
            $this->command->error('games.json file not found!');
            return;
        }

        $json = File::get($jsonPath);
        $games = json_decode($json, true);

        if (!is_array($games)) {
            $this->command->error('games.json did not decode to an array.');
            return;
        }

        foreach ($games as $gameData) {
            $game = Game::firstOrCreate(
                ['title' => $gameData['title']],
                ['description' => $gameData['description'] ?? null]
            );

            $genreIds = collect($gameData['genres'] ?? [])
                ->map(fn ($name) => Genre::firstOrCreate(['name' => $name])->id)
                ->all();

            $game->genres()->sync($genreIds);
        }

        $this->command->info('Successfully seeded ' . count($games) . ' games with genres.');
    }
}
