<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Getas;

class GetasController extends Controller
{
    //
    public function dataclean_getas()
    {
        $data = Getas::all();
        
        return view('getas.dataclean', ['datas'=>$data]);
    }
    
    public function casefolding_getas()
    {
        $data = Getas::all();

        return view('getas.casefolding', ['datas'=>$data]);
    }

    public function tokenizing_getas()
    {
        $data = Getas::all();

        return view('getas.tokenizing', ['datas'=>$data]);
    }

    public function filtering_getas()
    {
        $data = Getas::all();

        return view('getas.filtering', ['datas'=>$data]);
    }

    public function normalize_getas()
    {
        $data = Getas::all();

        return view('getas.normalize', ['datas'=>$data]);
    }

    public function stemming_getas()
    {
        $data = Getas::all();

        return view('getas.stemming', ['datas'=>$data]);
    }

    public function labeling_getas()
    {
        $data = Getas::all();

        return view('labeling.labeling_getas', ['datas'=>$data]);
    }

}
