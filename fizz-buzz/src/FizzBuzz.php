<?php

namespace FizzBuzz;

use FizzBuzz\Rule\ContainsFiveRule;
use FizzBuzz\Rule\ContainsThreeAndFiveRule;
use FizzBuzz\Rule\ContainsThreeRule;
use FizzBuzz\Rule\DivisibleByFiveRule;
use FizzBuzz\Rule\DivisibleByThreeAndFiveRule;
use FizzBuzz\Rule\DivisibleByThreeRule;
use FizzBuzz\RuleMachine\RuleMachine;

class FizzBuzz
{
    public function __construct(RuleMachine $ruleMachine)
    {
        $this->ruleMachine = $ruleMachine;
        $this->ruleMachine->add(new ContainsThreeRule('Fizz'));
        $this->ruleMachine->add(new ContainsFiveRule('Buzz'));
        $this->ruleMachine->add(new ContainsThreeAndFiveRule('FizzBuzz'));
        $this->ruleMachine->add(new DivisibleByThreeRule('Fizz'));
        $this->ruleMachine->add(new DivisibleByFiveRule('Buzz'));
        $this->ruleMachine->add(new DivisibleByThreeAndFiveRule('FizzBuzz'));
    }

    public function getData($number)
    {
        return $this->ruleMachine->generateValue($number);
    }
}
