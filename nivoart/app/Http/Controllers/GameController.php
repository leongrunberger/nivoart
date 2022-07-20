<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
       
        $data = Game::all();
       
       return view('gamesoverview', compact('data'));
    }

    public function create(){
       
       return view('creategame');
    }

    public function store(Request $request) {
        
        $request->validate([
            'titel' => 'required',
            'eins' => 'required',
            'zwei' => 'required',
            'drei' => 'required',
            'vier' => 'required',
            'fuenf' => 'required',
            'sechs' => 'required',
            'sieben' => 'required',
            'acht' => 'required',
            'neun' => 'required',
            'zehn' => 'required'
            ]);
            $game = new Game;
            $game->titel = $request->titel;
                $game->eins = $request->eins;
                $game->zwei = $request->zwei;
                $game->drei = $request->drei;
                $game->vier = $request->vier;
                $game->fuenf = $request->fuenf;
                $game->sechs = $request->sechs;
                $game->sieben = $request->sieben;
                $game->acht = $request->acht;
                $game->neun = $request->neun;
                $game->zehn = $request->zehn;
                $game->kategorie = $request->kategorie;
            $game->save();
            return redirect('/gamesoverview')
            ->with('success','Game has been created successfully.');
    }
}
