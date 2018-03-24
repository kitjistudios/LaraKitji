<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flipboard;

class FlipboardController extends Controller {

//
    function index() {
        $flipinst = new \App\Flipboard();
        date_default_timezone_set('America/La_Paz');
        $flipinst->CurrentTime = $date = date('g:i a');
        $theme = $flipinst->GetTheme();
        return view('welcome')->with('theme', $theme);
    }

}
