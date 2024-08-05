<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{


    public function puzzle_index(){

        return view('PuzzleGame.index');
    }

    public function puzzle_board($name){

        return view('PuzzleGame.puzzle_board',compact('name'));
    }

    
}
