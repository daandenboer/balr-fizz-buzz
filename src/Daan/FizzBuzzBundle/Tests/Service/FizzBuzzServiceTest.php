<?php
namespace Daan\FizzBuzzBundle\Tests\Service;

use Daan\FizzBuzzBundle\Service\FizzBuzzService;

class FizzBuzzServiceTest extends \PHPUnit_Framework_TestCase
{
    
    public function testMakeFizzBuzz()
    {
        $fizzBuzzService = new FizzBuzzService();
        $fizzBuzz = $fizzBuzzService->makeFizzBuzz();
        $expected = [
            1,
            2,
            'BALR.',
            4,
            '433',
            'BALR.',
            7,
            8,
            'BALR.',
            '433',
            11,
            'BALR.',
            13,
            14,
            'BALR.433',
            16,
            17,
            'BALR.',
            19,
            '433',
            'BALR.',
            22,
            23,
            'BALR.',
            '433',
            26,
            'BALR.',
            28,
            29,
            'BALR.433'
        ];
        
        $this->assertEquals($expected, $fizzBuzz);
    }

    public function testMakeFizzBuzzCustomRange()
    {
        $fizzBuzzService = new FizzBuzzService();
        $fizzBuzz = $fizzBuzzService->makeFizzBuzz(1, 4);
        $expected = [
            1,
            2,
            'BALR.',
            4
        ];

        $this->assertEquals($expected, $fizzBuzz);
    }
}
