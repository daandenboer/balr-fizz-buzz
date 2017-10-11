<?php

namespace Daan\FizzBuzzBundle\Service;

class FizzBuzzService
{

    public function makeFizzBuzz($start = 1, $end = 30)
    {
        $fizzBuzz = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 5 == 0 && $i % 3 == 0) {
                $output = "BALR.433";
            } elseif ($i % 5 == 0) {
                $output = "433";
            } elseif ($i % 3 == 0) {
                $output  = "BALR.";
            } else {
                $output = $i;
            }
            $fizzBuzz[] = $output;
        }

        return $fizzBuzz;

    }
}