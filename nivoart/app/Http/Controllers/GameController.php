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
        $game = new Game();
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
        $game->Kategorie = $request->Kategorie;
        

        $game->save();

        return redirect('/gamesoverview');
    }
}
