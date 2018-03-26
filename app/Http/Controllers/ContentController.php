<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller {

    function index() {
        $contentinst = new \App\Content();
        $sundialinst = new \App\SunDial();

        $contentinst->SelectRandomImage();
        $theme = $sundialinst->GetTimeOfDay();
        return view('welcome')->with('theme', $theme);
    }

}
