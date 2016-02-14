<?php

namespace FizzBuzz;

class FizzBuzz
{

    /**
     * @return bool
     */
    public function changeMe()
    {
        return true;
    }

    public function getData()
    {
        $numbers = [];

        for ($i = 1; $i <= 100; $i++) {
            $numbers[$i] = $i;
            if ($i % 3 == 0) {
                $numbers[$i] = 'Fizz';
            }
            if ($i == 5) {
                $numbers[$i] = 'Buzz';
            }
            if ($i == 15) {
                $numbers[$i] = 'FizzBuzz';
            }
        }

        return $numbers;
    }
}
