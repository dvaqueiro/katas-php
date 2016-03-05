<?php

namespace FizzBuzz;

use FizzBuzz\Rule\BuzzRule;
use FizzBuzz\Rule\FizzBuzzRule;
use FizzBuzz\Rule\FizzRule;
use FizzBuzz\RuleMachine\RuleMachine;

class FizzBuzz
{
    const TOTAL = 100;
    const INITIAL = 1;

    public function __construct(RuleMachine $ruleMachine)
    {
        $this->ruleMachine = $ruleMachine;
        $this->ruleMachine->add(new BuzzRule());
        $this->ruleMachine->add(new FizzRule());
        $this->ruleMachine->add(new FizzBuzzRule());
    }

    public function getData()
    {
        $numbers = [];
        for ($i = self::INITIAL; $i <= self::TOTAL; $i++) {
            $numbers[$i] = $this->ruleMachine->generateValue($i);
        }
        return $numbers;
    }
}
