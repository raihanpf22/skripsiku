<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otak2;

class Otak2Controller extends Controller
{
    //
    public function dataclean_otak2()
    {
        $data = Otak2::all();
        
        return view('otak2.dataclean', ['datas'=>$data]);
    }
    
    public function casefolding_otak2()
    {
        $data = Otak2::all();

        return view('otak2.casefolding', ['datas'=>$data]);
    }

    public function tokenizing_otak2()
    {
        $data = Otak2::all();

        return view('otak2.tokenizing', ['datas'=>$data]);
    }

    public function filtering_otak2()
    {
        $data = Otak2::all();

        return view('otak2.filtering', ['datas'=>$data]);
    }

    public function normalize_otak2()
    {
        $data = Otak2::all();

        return view('otak2.normalize', ['datas'=>$data]);
    }

    public function stemming_otak2()
    {
        $data = Otak2::all();

        return view('otak2.stemming', ['datas'=>$data]);
    }

    public function labeling_otak2()
    {
        $data = Otak2::all();

        return view('labeling.labeling_otak2', ['datas'=>$data]);
    }

    public function analisis_otak2()
    {
        $data = Otak2::all();

        return view('hasil.analisis_otak2', ['datas'=>$data]);
    }


}
