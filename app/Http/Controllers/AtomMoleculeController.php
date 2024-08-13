<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Example;

class AtomMoleculeController extends Controller
{
    public function showAtomMolecule()
    {
        $materials = Material::all();
        return view('AtomMolecule.showAtomMolecule', compact('materials'));
    }

    public function atomMoleculeDetails($id)
    {
        $material = Material::find($id);
        $examples = Example::where('materialID', $id)->get();
        return view('AtomMolecule.atomMoleculeDetails', compact('material', 'examples'));
    }

    public function exampleDetails($id)
    {
        $example = Example::find($id);
        return view('AtomMolecule.exampleDetails', compact('example'));
    }
}