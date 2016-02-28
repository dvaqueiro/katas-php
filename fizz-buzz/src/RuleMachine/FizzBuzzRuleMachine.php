<?php
namespace FizzBuzz\RuleMachine;

use FizzBuzz\Rule\Rule;

class FizzBuzzRuleMachine implements RuleMachine
{
    private $_rules;

    /**
     * @param $i
     * @return String
     */
    public function generateValue($i)
    {
        $value = $i;
        /** @var Rule $rule */
        foreach ($this->_rules as $rule) {
            if ($rule->check($i)) {
                $value = $rule->generateValue();
            }
        }
        return $value;
    }

    public function add(Rule $rule)
    {
        $this->_rules[] = $rule;
    }
}