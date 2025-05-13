<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemDeSucesso = $request->session()->get('mesagem.sucesso');

        return view('series.index')-> with('series', $series)
            ->with('mensagemDeSucesso', $mensagemDeSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());


        return to_route('series.index');

    }

    public function destroy(Serie $serie, Request $request)
    {
        $serie->delete();
        $request->session()->flash('mensagemDeSucesso', 'Série removida com sucesso!');

        return to_route('series.index');
    }





}
