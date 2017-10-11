<?php

namespace PrintBundle\Controller;

class Outputter {

    public function outputStuff($data)
    {
        if (is_array($data)) {
            echo implode(' ', $data) . '<br />';
        } else {
            echo $data . '<br />';
        }
    }
}

class NumberChecker {

    private $rules;

    public function __construct(array $rules) {
        $this->rules = $rules;
    }

    public function check($number) {
        $results = [];

        foreach ($this->rules as $key => $word) {
            if ($number % $key === 0) {
                $results[] = $word;
            }
        }

        if (empty($results)) {
            return $number;
        }

        return $results;
    }
}

class BalrIterator implements \Iterator {

    private $start;
    private $end;

    public function __construct($start, $end) {
        $this->start = $start;
        $this->end = $end;
    }

    public function current() {
        return ($this->number);
    }

    public function rewind() {
        $this->number = $this->start;
    }

    public function key() {
        return null;
    }

    public function next() {
        ++$this->number;
    }

    public function valid() {
        return $this->number <= $this->end;
    }
}

class BalrPrinter {

    private $iterator;

    private $numberChecker;

    public function __construct($start, $end, $rules) {
        $this->iterator = new BalrIterator($start, $end);
        $this->numberChecker = new NumberChecker($rules);
        $this->outputter = new Outputter;
    }

    public function dump()
    {
        foreach($this->iterator as $number) {
            $result = $this->numberChecker->check($number);
            $this->outputter->outputStuff($result);

        }
    }
}

$printer = new BalrPrinter(1, 100, [3 => "BALR", 5 => "433"]);

$printer->dump();
