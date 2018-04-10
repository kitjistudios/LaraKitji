<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    // private $mornimgarr;
    private $jmboimgarr;
    private $aftrimgarr;
    private $evngimgarr;
    private $mornimgname;
    private $eveimgname;
    private $aftrimgname;
    private $sundial;

    function __construct() {
        $this->sundial = new SunDial();
    }

    function ImageArray() {

        $timeofday = $this->sundial->GetTimeOfDay();
        if ($timeofday == 'Morning') {
            $this->jmboimgarr = $this->mornimgarr = array("IMAG1361.jpg", "IMAG1367.jpg", "IMAG1372.jpg", "IMAG1395.jpg", "IMAG1367.jpg");
        } else
        if ($timeofday == 'Afternoon') {
            $this->jmboimgarr = $this->aftrimgarr = array("IMAG1361.jpg", "IMAG1367.jpg", "IMAG1372.jpg", "IMAG1395.jpg", "IMAG1367.jpg");
        } else
        if ($timeofday == 'Evening') {
            $this->jmboimgarr = $this->evngimgarr = array("IMAG1361.jpg", "IMAG1367.jpg", "IMAG1372.jpg", "IMAG1395.jpg", "IMAG1367.jpg");
        }
        return $this->jmboimgarr;
    }

    public function SelectRandomImage() {
        $arrlen = sizeof($this->ImageArray());
        $randomindex = rand(0, $arrlen-1);
        $image = $this->ImageArray()[$randomindex];

        return $image;
    }

}

class SunDial {

    public $CurrentTime;
    private $curtime;
    protected $timeofday;

//find the time of day
    public function GetTimeOfDay() {
        date_default_timezone_set('America/La_Paz');
        $this->curtime = date('g:i a');
        $this->curtime = strtotime($this->curtime);

        $morningtime = strtotime("5:30 am");
        $afternoontime = strtotime("12:00 pm");
        $eveningtime = strtotime("4:00 pm");

        if ($this->curtime >= $morningtime && $this->curtime <= $afternoontime) {

            $this->timeofday = "Morning";
        } else
        if ($this->curtime >= $afternoontime && $this->curtime <= $eveningtime) {

            $this->timeofday = "Afternoon";
        } else
        if ($this->curtime >= $eveningtime) {

            $this->timeofday = "Evening";
        }
        return $this->timeofday;
    }

}
