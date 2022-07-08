<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kricu;

class KricuController extends Controller
{
    //
    public function dataclean_kricu()
    {
        $data = Kricu::all();
        
        return view('kricu.dataclean', ['datas'=>$data]);
    }
    
    public function casefolding_kricu()
    {
        $data = Kricu::all();

        return view('kricu.casefolding', ['datas'=>$data]);
    }

    public function tokenizing_kricu()
    {
        $data = Kricu::all();

        return view('kricu.tokenizing', ['datas'=>$data]);
    }

    public function filtering_kricu()
    {
        $data = Kricu::all();

        return view('kricu.filtering', ['datas'=>$data]);
    }

    public function normalize_kricu()
    {
        $data = Kricu::all();

        return view('kricu.normalize', ['datas'=>$data]);
    }

    public function stemming_kricu()
    {
        $data = Kricu::all();

        return view('kricu.stemming', ['datas'=>$data]);
    }


}
