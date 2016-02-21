<?php

namespace FizzBuzz;

interface RuleMachine
{
    /**
     * @param $i
     * @return String
     */
    public function generateValue($i);

    public function add(Rule $rule);
}

interface Rule
{
    /**
     * @param $number
     * @return bool
     */
    public function check($number);

    /**
     * @return String
     */
    public function generateValue();
}

class FizzBuzz
{
    const TOTAL = 100;

    public function __construct()
    {
        $this->ruleMachine = new FizzBuzzRuleMachine();
        $this->ruleMachine->add(new BuzzRule());
        $this->ruleMachine->add(new FizzRule());
        $this->ruleMachine->add(new FizzBuzzRule());
    }

    public function getData()
    {
        $numbers = [];
        for ($i = 1; $i <= self::TOTAL; $i++) {
            $numbers[$i] = $this->ruleMachine->generateValue($i);
        }
        return $numbers;
    }

}

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

class FizzBuzzRule implements Rule
{

    /**
     * @param $number
     * @return bool
     */
    public function check($number)
    {
        return ($number % 15 == 0);
    }

    /**
     * @return String
     */
    public function generateValue()
    {
        return 'FizzBuzz';
    }
}

class BuzzRule implements Rule
{

    /**
     * @param $number
     * @return bool
     */
    public function check($number)
    {
        return ($number % 5 == 0);
    }

    /**
     * @return String
     */
    public function generateValue()
    {
        return 'Buzz';
    }
}

class FizzRule implements Rule
{
    public function check($number)
    {
        return ($number % 3 == 0);
    }

    public function generateValue()
    {
        return 'Fizz';
    }
}