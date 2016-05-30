<?php

namespace FizzBuzz;

use FizzBuzz\Rule\BuzzRule;
use FizzBuzz\Rule\FizzBuzzRule;
use FizzBuzz\Rule\FizzRule;
use FizzBuzz\RuleMachine\RuleMachine;

class FizzBuzz
{
    public function __construct(RuleMachine $ruleMachine)
    {
        $this->ruleMachine = $ruleMachine;
        $this->ruleMachine->add(new BuzzRule());
        $this->ruleMachine->add(new FizzRule());
        $this->ruleMachine->add(new FizzBuzzRule());
    }

    public function getData($number)
    {
        return $this->ruleMachine->generateValue($number);
    }
}
