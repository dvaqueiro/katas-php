<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var  FizzBuzz */
    private $fizzbuzz;

    /** @test */
    public function it_should_test_something()
    {
        $this->assertTrue($this->fizzbuzz->changeMe());
    }

    /** @test */
    public function first_number_is_one()
    {
        $result = $this->fizzbuzz->getData()[1];
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $result = $this->fizzbuzz->getData()[3];
        $this->assertEquals('Fizz', $result);
    }

    /** @test */
    public function fith_number_is_Buzz()
    {
        $result = $this->fizzbuzz->getData()[5];
        $this->assertEquals('Buzz', $result);
    }
    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }
}
