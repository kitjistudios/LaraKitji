<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Flipboard extends Model {

    public $CurrentTime;
    private $curtime;
    private $timeofday;

    //
    function __construct() {
        
    }

    //find the time of day
    public function GetTheme() {
        $this->curtime = strtotime($this->CurrentTime);

        $morningtime = strtotime("5:30 am");
        $afternoontime = strtotime("12:00 pm");
        $eveningtime = strtotime("4:00 pm");
        $test = date("h:i a");
        //$morningtime = DateTime::createFromFormat('H:i a', $morning);
        //$afternoontime = DateTime::createFromFormat('H:i a', $afternoon);
        //$eveningtime = DateTime::createFromFormat('H:i a', $evening);

        if ($this->curtime >= $morningtime && $this->curtime <= $afternoontime) {
            //echo 'here';
            $this->timeofday = "Morning";
        } else
        if ($this->curtime >= $afternoontime && $this->curtime <= $eveningtime) {
            //echo 'here';
            $this->timeofday = "Afternoon";
        } else
        if ($this->curtime >= $eveningtime) {
            //echo 'here';
            $this->timeofday = "Evening";
        }
        return $this->timeofday;
    }

}
