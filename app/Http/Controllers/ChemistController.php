<?php

namespace App\Http\Controllers;
use App\Models\Chemist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChemistController extends Controller
{
    public function Chemist_Index(){

        $chemists = Chemist::all();
        return view('ChemistIndex',compact('chemists'));
    }

    public function Chemist_Profile($id){

        $data = DB::table('chemists')
        ->join('biographies', 'chemists.chemistID', '=', 'biographies.chemistID')
        ->where('chemists.chemistID', $id)
        ->select('chemists.*', 'biographies.title', 'biographies.timeline', 'biographies.description', 'biographies.imageURL')
        ->get();

    // Separate the chemist and biographies from the result
    $chemist = $data->first(); // The first record is the chemist
    $biographies = $data->whereNotNull('chemistID');; // All other records are biographies

    return view('ChemistProfile', ['chemist' => $chemist, 'biographies' => $biographies]);
    }
}
