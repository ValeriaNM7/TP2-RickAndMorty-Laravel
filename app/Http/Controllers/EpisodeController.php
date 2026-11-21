<?php
namespace App\Http\Controllers;

use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        $episodes = Episode::orderBy('id')->paginate(20);

        return view('episodes.index', compact('episodes'));
    }

    public function show($id)
    {
        $episode = Episode::with('characters')->findOrFail($id);

        return view('episodes.show', compact('episode'));
    }
}
