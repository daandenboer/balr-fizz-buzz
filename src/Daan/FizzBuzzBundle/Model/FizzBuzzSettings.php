<?php
namespace Daan\FizzBuzzBundle\Model;

class FizzBuzzSettings {
    
     private $word1;
     
     private $word2;
     
     public function getWord1()
     {
         return $this->word1;
     }
     
     public function getWord2()
     {
         return $this->word2;
     }
     
     public function setWord1($word1)
     {
         $this->word1 = $word1;
     }
     
     public function setWord2($word2)
     {
         $this->word2 = $word2;
     }
}
