<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketam;

class KetamController extends Controller
{
    //
    public function dataclean_ketam()
    {
        $data = Ketam::all();
        
        return view('ketam.dataclean', ['datas'=>$data]);
    }
    
    public function casefolding_ketam()
    {
        $data = Ketam::all();

        return view('ketam.casefolding', ['datas'=>$data]);
    }

    public function tokenizing_ketam()
    {
        $data = Ketam::all();

        return view('ketam.tokenizing', ['datas'=>$data]);
    }

    public function filtering_ketam()
    {
        $data = Ketam::all();

        return view('ketam.filtering', ['datas'=>$data]);
    }

    public function normalize_ketam()
    {
        $data = Ketam::all();

        return view('ketam.normalize', ['datas'=>$data]);
    }

    public function stemming_ketam()
    {
        $data = Ketam::all();

        return view('ketam.stemming', ['datas'=>$data]);
    }

    public function labeling_ketam()
    {
        $data = Ketam::all();

        return view('labeling.labeling_ketam', ['datas'=>$data]);
    }

}
