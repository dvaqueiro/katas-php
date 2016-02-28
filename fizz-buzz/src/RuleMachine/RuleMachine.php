<?php

namespace FizzBuzz\RuleMachine;

use FizzBuzz\Rule\Rule;

interface RuleMachine
{
    /**
     * @param $i
     * @return String
     */
    public function generateValue($i);

    public function add(Rule $rule);
}