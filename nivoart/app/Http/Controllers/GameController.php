<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request){
       
        $data = Game::all();

        $game =Game::where([
            ['titel', '!=', NULL],
            [function($query) use ($request){
                if(($term = $request->term)){
                 $query->orWhere('titel', 'LIKE', '%' . $term . '%')->get();   
                }
            }]
            
            
        ])->orderBy("id", "desc")
        ->paginate(10);;
       
       return view('top10.gamesoverview', compact('data'))->with('i',(request()->input('page', 1) - 1)* 5);
    }

    public function create(){
       
       return view('top10.creategame');
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

    public function show($id)
    {
        $game = Game::find($id);

        return view('Top10.show_game', compact('game'));
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);

        return view('Top10.editgame', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
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
            'zehn' => 'required',
            'kategorie' => 'required'
        ]);

        Game::whereId($id)->update($data);

        return redirect('/gamesoverview')->with('success', 'Spiel erfolgreich bearbeitet');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/gamesoverview')->with('success', 'Game gelöscht');
    }
}
