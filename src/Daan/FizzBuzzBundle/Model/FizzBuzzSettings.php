<?php
namespace Daan\FizzBuzzBundle\Model;

class FizzBuzzSettings {
    
     private $word1;
     
     private $word2;
     
     private $number1;
     
     private $number2;
     
     private $start;
     
     private $end;
     
     public function getWord1()
     {
         return $this->word1;
     }
     
     public function getWord2()
     {
         return $this->word2;
     }
     
     public function getNumber1()
     {
         return $this->number1;
     }
     
     public function getNumber2()
     {
         return $this->number2;
     }
    
     public function getStart()
     {
         return $this->start;
     }
     
     public function getEnd()
     {
         return $this->end;
     }
     
     public function setWord1($word1)
     {
         $this->word1 = $word1;
     }
     
     public function setWord2($word2)
     {
         $this->word2 = $word2;
     }
     
     public function setNumber1($number1)
     {
         $this->number1 = $number1;
     }
     
     public function setNumber2($number2)
     {
         $this->number2 = $number2;
     }
     
     public function setStart($start)
     {
         $this->start = $start;
     }
     
     public function setEnd($end)
     {
         $this->end = $end;
     }
}
