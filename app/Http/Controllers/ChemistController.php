<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemistController extends Controller
{
    public function Chemist_Index(){
        
        return view('ChemistIndex');
    }

    public function Chemist_Profile(){
        
        return view('ChemistProfile');
    }
}
