<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Game::with('genres')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return $game->load('genres');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return $game->load('genres');
    }

    /**
     * Update the specified resource in storage.
     */
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

        return $game->load('genres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response()->noContent();
    }
}
