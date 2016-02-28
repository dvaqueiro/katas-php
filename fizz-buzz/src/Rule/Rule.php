<?php
namespace FizzBuzz\Rule;

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