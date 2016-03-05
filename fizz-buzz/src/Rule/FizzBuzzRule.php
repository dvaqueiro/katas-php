<?php
namespace FizzBuzz\Rule;

class FizzBuzzRule implements Rule
{
    const VALUE = 'FizzBuzz';

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
        return self::VALUE;
    }
}
