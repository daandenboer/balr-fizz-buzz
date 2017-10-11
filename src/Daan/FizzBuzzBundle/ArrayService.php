<?php
namespace Daan\FizzBuzzBundle\Service;

class ArrayService
{

    private $numberArray = [];

    public function buildArray()
    {
        for($i=0; $i<=100; $i++)
        {
            array_push($numberarray, $i);
        }
        return $numberarray;
    }
}