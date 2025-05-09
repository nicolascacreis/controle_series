<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Stranger Things'
        ];

        return view('listar-series', ['series' => $series]);
    }
}
