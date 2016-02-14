<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_test_something()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->changeMe());
    }

    /** @test */
    public function first_number_is_one()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->getData()[1];
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $fizbuzz = new FizzBuzz();
        $result = $fizbuzz->getData()[3];
        $this->assertEquals('Fizz', $result);
    }
}
