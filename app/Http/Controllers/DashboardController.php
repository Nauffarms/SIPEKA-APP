<?php

namespace App\Http\Controllers;

use App\Models\GeneralScorings;
use App\Models\ReligionScorings;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use phpDocumentor\Reflection\Types\This;

class DashboardController extends Controller
{
    public function index()
    {
        $general = GeneralScorings::count();
        $religion = ReligionScorings::count();
        $gen_mean = GeneralScorings::average('score');
        $rel_mean = ReligionScorings::average('score');
        $maxgen = GeneralScorings::max('score');
        $maxrel = ReligionScorings::max('score');
        $maxscore = max($maxgen, $maxrel);
        $mingen = GeneralScorings::min('score');
        $minrel = ReligionScorings::min('score');
        $minscore = min($mingen, $minrel);


        return view('index', [
            "title" => "Dashboard",
            "count" => $general + $religion,
            "mean" => ($gen_mean + $rel_mean) / 2,
            "general" => $general,
            "religion" => $religion,
            "max" => $maxscore,
            "min" => $minscore
        ]);
    }
}
