<?php
namespace FizzBuzz\Rule;

class DivisibleByThreeRule implements Rule
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
        return ($number % 3 == 0);
    }

    /**
     * @return String
     */
    public function generateValue()
    {
        return $this->valueIfCheck;
    }
}
