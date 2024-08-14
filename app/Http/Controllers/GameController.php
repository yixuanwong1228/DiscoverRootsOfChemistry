<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function VirtualLab_Index(){

        return view('VirtualLab');
    }

    public function face_change_game(){

        return view('faceChangeGame');
    }

    public function AtomicStructure_Index(){

        return view('AtomicStructure');
    }

    public function Isotopes_Index(){

        return view('Isotopes');
    }

    public function puzzle_index(){

        return view('PuzzleGame.index');
    }

    public function puzzle_board($name){

        return view('PuzzleGame.puzzle_board',compact('name'));
    }
}
