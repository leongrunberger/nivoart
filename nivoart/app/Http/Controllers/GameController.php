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
}
