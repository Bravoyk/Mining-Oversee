<?php

namespace App\Http\Controllers;

use App\Models\Benefit\Benefit;
use Illuminate\Http\Request;

class BenefitController
{


    public function detail(Request $request)
    {
        $start_time = $request->input('start_time');
        $end_time   = $request->input('end_time');


        return view('detail');
    }


    public function getBenefit()
    {
        $benefit = new Benefit();
        return $benefit->analyseData();
    }

    public function checkPoint()
    {
        $benefit = new Benefit();
        return $benefit->checkPoint();
    }
}
