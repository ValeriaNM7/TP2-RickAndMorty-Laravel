<?php
namespace App\Http\Controllers;

use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::orderBy('id')->paginate(20);

        return view('characters.index', compact('characters'));
    }

    public function show($id)
    {
        $character = Character::with(['origin', 'location', 'episodes'])->findOrFail($id);

        return view('characters.show', compact('character'));
    }
}