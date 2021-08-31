<?php
namespace oop\oopgeneratetoken\number;
class Number
{
    private $number='';

    private $length;

    public function __construct($length)
    {
      $this->length=$length;
    }
    public function getNumber()
    {
        return $this->number;
    }

    public function generateNumber()
    {
      for($i=1;$i<=$this->length;$i++)
      {
        $this->number .= rand(0,9);
      }
    }

}


?>