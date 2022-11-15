<?php
/*
class Date{
    private $day, $month, $year;

    function __construct($day,$month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
}*/

class Date{
   const maxMonth =12;
   private static $monthStrings = array("Janvier", "Fevrier", "Mars");
   private $month =1;


    public function setMonth($month)
   {
    if ($month>self::maxMonth)
     die("error");
      $this->month = $month;
   }
}

?>