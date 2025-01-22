<?php

namespace App\Http\Controllers;

use App\Models\ReligionScorings;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReligionScoringsController extends Controller
{
    public function index()
    {
        return view('supervisiAgama', [
            "title" => "Penilaian Agama"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'NIP' => ['required'],
            'stage' => ['required'],
            's1' => ['required'], 's2' => ['required'], 's3' => ['required'], 's4' => ['required'],
            's5' => ['required'], 's6' => ['required'], 's7' => ['required'], 's8' => ['required'],
            's9' => ['required'], 's10' => ['required'], 's11' => ['required'], 's12' => ['required'],
            's13' => ['required'], 's14' => ['required'], 's15' => ['required'], 's16' => ['required'],
            's17' => ['required'], 's18' => ['required'], 's19' => ['required'], 's20' => ['required'],
            's21' => ['required'], 's22' => ['required'], 's23' => ['required'], 's24' => ['required'],
            's25' => ['required'], 's26' => ['required'], 's27' => ['required'], 's28' => ['required'],
        ]);

        $scoring = new ReligionScorings();
        $scoring->name = $request->input('name');
        $scoring->NIP = $request->input('NIP');
        $scoring->stage = $request->input('stage');
        $scoring->s1 = $request->input('s1');
        $scoring->s2 = $request->input('s2');
        $scoring->s3 = $request->input('s3');
        $scoring->s4 = $request->input('s4');
        $scoring->s5 = $request->input('s5');
        $scoring->s6 = $request->input('s6');
        $scoring->s7 = $request->input('s7');
        $scoring->s8 = $request->input('s8');
        $scoring->s9 = $request->input('s9');
        $scoring->s10 = $request->input('s10');
        $scoring->s11 = $request->input('s11');
        $scoring->s12 = $request->input('s12');
        $scoring->s13 = $request->input('s13');
        $scoring->s14 = $request->input('s14');
        $scoring->s15 = $request->input('s15');
        $scoring->s16 = $request->input('s16');
        $scoring->s17 = $request->input('s17');
        $scoring->s18 = $request->input('s18');
        $scoring->s19 = $request->input('s19');
        $scoring->s20 = $request->input('s20');
        $scoring->s21 = $request->input('s21');
        $scoring->s22 = $request->input('s22');
        $scoring->s23 = $request->input('s23');
        $scoring->s24 = $request->input('s24');
        $scoring->s25 = $request->input('s25');
        $scoring->s26 = $request->input('s26');
        $scoring->s27 = $request->input('s27');
        $scoring->s28 = $request->input('s28');
        $scoring->save();

        $scoring->calculateScoreAndGrade();
        $scoring->save();

        return redirect('/supervisiAgama');
    }

    // public function calculateAndGrade()
    // {
    //     $responses = GeneralScorings::all();

    //     foreach ($responses as $response) {
    //         $response->calculateScoreAndGrade();
    //         $response->save();
    //     }
    // }

    public function show()
    {
        $result = ReligionScorings::all();

        return view('agama', [
            "title" => "Hasil Agama",
            "result" => $result
        ]);
    }
}
