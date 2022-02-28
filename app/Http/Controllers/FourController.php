<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FourController extends Controller
{
    function index() {
        $matos = [
            (object)['nom' => 'stylo'],
            (object)['nom' => 'bic'],
            (object)['nom' => 'fluo'],
            (object)['nom' => 'compas'],
        ];
        return view('page4', compact('matos'));
    }
}
