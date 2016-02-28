<?php
namespace FizzBuzz\Rule;

class FizzRule implements Rule
{
    const VALUE = 'Fizz';

    public function check($number)
    {
        return ($number % 3 == 0);
    }

    public function generateValue()
    {
        return self::VALUE;
    }
}