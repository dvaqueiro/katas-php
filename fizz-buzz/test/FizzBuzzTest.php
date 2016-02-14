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
        $this->assertEquals(1, $this->fizzbuzz->getData()[1]);
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $this->assertEquals('Fizz', $this->fizzbuzz->getData()[3]);
    }

    /** @test */
    public function fith_number_is_Buzz()
    {
        $this->assertEquals('Buzz', $this->fizzbuzz->getData()[5]);
    }

    /** @test */
    public function fifteen_number_is_fizzbuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->getData()[15]);
    }

    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }
}
