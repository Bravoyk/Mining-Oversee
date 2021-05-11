<?php

namespace App\Http\Controllers;

use App\Models\Benefit\Benefit;

class BenefitController
{
    public function index()
    {
        $benefit = new Benefit();
        return $benefit->analyseData();
    }
}
