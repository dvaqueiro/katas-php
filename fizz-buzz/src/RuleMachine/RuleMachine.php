<?php

namespace FizzBuzz\RuleMachine;

use FizzBuzz\Rule\Rule;

interface RuleMachine
{
    /**
     * @param $number
     * @return mixed
     */
    public function generateValue($number);

    /**
     * @param Rule $rule
     */
    public function add(Rule $rule);
}
