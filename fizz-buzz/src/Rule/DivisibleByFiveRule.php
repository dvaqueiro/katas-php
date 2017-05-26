<?php
namespace FizzBuzz\Rule;

class DivisibleByFiveRule implements Rule
{
    private $valueIfCheck;

    function __construct($valueIfCheck)
    {
        $this->valueIfCheck = $valueIfCheck;
    }

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
        return $this->valueIfCheck;
    }
}
