<?php
namespace FizzBuzz\RuleMachine;

use FizzBuzz\Rule\Rule;

class FizzBuzzRuleMachine implements RuleMachine
{
    private $rules;

    /**
     * @param $number
     * @return String
     */
    public function generateValue($number)
    {
        $value = $number;
        /** @var Rule $rule */
        foreach ($this->rules as $rule) {
            if ($rule->check($number)) {
                $value = $rule->generateValue();
            }
        }
        return $value;
    }

    public function add(Rule $rule)
    {
        $this->rules[] = $rule;
    }
}
