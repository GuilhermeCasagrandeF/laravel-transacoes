<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodesController
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes()->orderBy('id')->get()]);
    }

    public function update(Request $request, Season $season)
    {
        $watechedEpisodes = $request->episodes;
        $season->episodes->each(function(Episode $episode) use ($watechedEpisodes) {
            $episode->watched = in_array($episode->id, $watechedEpisodes);
        });

        $season->push();

        return to_route('episodes.index', $season->id);
    }
}
