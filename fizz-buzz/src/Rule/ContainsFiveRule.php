<?php
namespace FizzBuzz\Rule;

class ContainsFiveRule implements Rule
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
        return (strpos($number, '5') !== false);
    }

    /**
     * @return String
     */
    public function generateValue()
    {
        return $this->valueIfCheck;
    }
}
