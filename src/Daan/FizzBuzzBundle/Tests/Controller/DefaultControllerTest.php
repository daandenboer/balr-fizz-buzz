<?php
namespace Daan\FizzBuzzBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    
    protected static $client;

    public static function setUpBeforeClass()
    {
        self::$client = static::createClient();
    }

    public static function tearDownAfterClass()
    {
        self::$client = null;
    }
    
    public function testIndex()
    {
        $crawler = self::$client->request('GET', '/');

        $expected = <<<EOD
<ul>
<li>1</li>
<li>2</li>
<li>BALR.</li>
<li>4</li>
<li>433</li>
<li>BALR.</li>
<li>7</li>
<li>8</li>
<li>BALR.</li>
<li>433</li>
<li>11</li>
<li>BALR.</li>
<li>13</li>
<li>14</li>
<li>BALR.433</li>
<li>16</li>
<li>17</li>
<li>BALR.</li>
<li>19</li>
<li>433</li>
<li>BALR.</li>
<li>22</li>
<li>23</li>
<li>BALR.</li>
<li>433</li>
<li>26</li>
<li>BALR.</li>
<li>28</li>
<li>29</li>
<li>BALR.433</li>
</ul>
EOD;

        $this->assertContains($expected, self::$client->getResponse()->getContent());
    }
    
    public function testCustomRange()
    {
        $crawler = self::$client->request('GET', '/1/30');
        
        $expected = <<<EOD
<ul>
<li>1</li>
<li>2</li>
<li>BALR.</li>
<li>4</li>
<li>433</li>
<li>BALR.</li>
<li>7</li>
<li>8</li>
<li>BALR.</li>
<li>433</li>
<li>11</li>
<li>BALR.</li>
<li>13</li>
<li>14</li>
<li>BALR.433</li>
<li>16</li>
<li>17</li>
<li>BALR.</li>
<li>19</li>
<li>433</li>
<li>BALR.</li>
<li>22</li>
<li>23</li>
<li>BALR.</li>
<li>433</li>
<li>26</li>
<li>BALR.</li>
<li>28</li>
<li>29</li>
<li>BALR.433</li>
</ul>
EOD;
        $this->assertContains($expected, self::$client->getResponse()->getContent());
    }
    
    public function testCustomRangeOneToThree()
    {
        $crawler = self::$client->request('GET', '/1/3');
        
        $expected = <<<EOD
<ul>
<li>1</li>
<li>2</li>
<li>BALR.</li>
</ul>
EOD;
        $this->assertContains($expected, self::$client->getResponse()->getContent());
    }
    
    public function testCustomRangeFiveToTen()
    {
        $crawler = self::$client->request('GET', '/5/10');
        
        $expected = <<<EOD
<ul>
<li>433</li>
<li>BALR.</li>
<li>7</li>
<li>8</li>
<li>BALR.</li>
<li>433</li>
</ul>
EOD;
        $this->assertContains($expected, self::$client->getResponse()->getContent());
    }

    public function testCustomRangeThirtyToThirtyFour()
    {
        $crawler = self::$client->request('GET', '/30/34');

        $expected = <<<EOD
<ul>
<li>BALR.433</li>
<li>31</li>
<li>32</li>
<li>BALR.</li>
<li>34</li>
</ul>
EOD;
        $this->assertContains($expected, self::$client->getResponse()->getContent());
    }

    public function testIndexCustomRules()
    {
        $crawler = self::$client->request('GET', '/');

        $expected = <<<EOD
<ul>
<li>1</li>
<li>2</li>
<li>BALR.</li>
<li>4</li>
<li>433</li>
<li>BALR.</li>
<li>7</li>
<li>8</li>
<li>BALR.</li>
<li>433</li>
<li>11</li>
<li>BALR.</li>
<li>13</li>
<li>14</li>
<li>BALR.433</li>
<li>16</li>
<li>17</li>
<li>BALR.</li>
<li>19</li>
<li>433</li>
<li>BALR.</li>
<li>22</li>
<li>23</li>
<li>BALR.</li>
<li>433</li>
<li>26</li>
<li>BALR.</li>
<li>28</li>
<li>29</li>
<li>BALR.433</li>
</ul>
EOD;

    }
}
