<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemDeSucesso = $request->session()->get('mesagem.sucesso');

        return view('series.index')-> with('series', $series)
            ->with('mensagemDeSucesso', $mensagemDeSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {


        Series::create($request->all());

        $request->session()->flash('mensagemDeSucesso', 'Série cadastrada com sucesso!');
        return to_route('series.index');



        return to_route('series.index');

    }

    public function destroy(Series $serie)
    {
        $serie->delete();

        return to_route('series.index')->with('mensagemDeSucesso', 'Série removida com sucesso!');
    }

    public function edit(Series $serie)
    {
        return view('series.edit')->with('serie', $serie);

    }

    public function update(SeriesFormRequest $request, Series $serie)
    {
        $serie->fill($request->all());
        $serie->save();

        return to_route('series.index')->with('mensagemDeSucesso', 'Série editada com sucesso!');
    }





}
