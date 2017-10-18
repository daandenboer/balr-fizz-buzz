<?php

namespace Daan\FizzBuzzBundle\Service;

use Daan\FizzBuzzBundle\Model\FizzBuzzSettings;

class FizzBuzzService
{
    
    public function makeFizzBuzz(
        FizzBuzzSettings $fizzBuzzSettings = null)
    {
        
        $word1 = "BALR.";
        $word2 = "433";
        $number1 = 3;
        $number2 = 5;
        $start = 1;
        $end = 30;
        
        if (isset($fizzBuzzSettings)) {
            $word1 = $fizzBuzzSettings->getWord1();
            $word2 = $fizzBuzzSettings->getWord2();
            $number1 = $fizzBuzzSettings->getNumber1();
            $number2 = $fizzBuzzSettings->getNumber2();
            $start = $fizzBuzzSettings->getStart();
            $end = $fizzBuzzSettings->getEnd();
        }
        
        $fizzBuzz = [];
        for ($i = $start; $i <= $end; $i++) {
            if (($i % $number2 == 0) && ($i % $number1 == 0)) {
                $output = $word1 . $word2;
            } elseif ($i % $number2 == 0) {
                $output = $word2;
            } elseif ($i % $number1 == 0) {
                $output = $word1;
            } else {
                $output = $i;
            }
            $fizzBuzz[] = $output;
        }

        return $fizzBuzz;

    }
}