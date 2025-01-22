<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GuideController extends Controller
{
    public function index()
    {
        return view('panduan', [
            "title" => "Panduan"
        ]);
    }
}
