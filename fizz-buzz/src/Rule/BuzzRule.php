<?php
namespace FizzBuzz\Rule;

class BuzzRule implements Rule
{
    const VALUE = 'Buzz';

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
        return self::VALUE;
    }
}