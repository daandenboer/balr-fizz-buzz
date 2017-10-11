<?php

namespace PrintBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class SuperController
{

public function showAction()
{
    $numbers = [1,2,"BALR",4,"433",6];

    foreach($numbers as $number) {
        echo $number . "<br>";
    }

    return new Response();
}
}