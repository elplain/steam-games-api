<?php

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Resources\GamesResource;
use Illuminate\Validation\Rule;

    public function index()
    {
        $games = Game::with('genres')->get();

        return GamesResource::collection($games);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:games,title'],
            'description' => ['nullable', 'string'],
            'genres' => ['array'],
            'genres.*' => ['integer', 'exists:genres,id'],
        ]);

        $game = Game::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
        ]);

        if (!empty($data['genres'])) {
            $game->genres()->attach($data['genres']);
        }

        return new GamesResource($game->load('genres'));
    }

    public function show(Game $game)
    {
        return new GamesResource($game->load('genres'));
    }

    public function update(Request $request, Game $game)
    {
        $data = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('games', 'title')->ignore($game->id),
            ],
            'description' => ['nullable', 'string'],
            'genres' => ['array'],
            'genres.*' => ['integer', 'exists:genres,id'],
        ]);

        $game->update([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
        ]);

        if (array_key_exists('genres', $data)) {
            $game->genres()->sync($data['genres']);
        }

        return new GamesResource($game->load('genres'));
    }
