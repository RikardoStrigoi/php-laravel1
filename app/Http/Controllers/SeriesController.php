<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Lucifer',
            'Lost',
            'Agents of SHIELD',
            'Godless'
        ];
    
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}