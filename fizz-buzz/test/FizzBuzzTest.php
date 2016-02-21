<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var  FizzBuzz */
    private $fizzbuzz;

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

    /** @test */
    public function getData_must_return_100_numbers()
    {
        $this->assertEquals(100, count($this->fizzbuzz->getData()));
    }

    /** @test */
    public function every_third_number_then_is_fizz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i++) {
            if ($i % 3 == 0 && $i % 5 != 0) {
                $this->assertEquals('Fizz', $numbers[$i]);
            }
        }
    }

    /** @test */
    public function every_five_numbers_is_buzz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i++) {
            if ($i % 5 == 0 && $i % 3 != 0) {
                $this->assertEquals('Buzz', $numbers[$i]);
            }
        }
    }

    /** @test */
    public function every_fifteen_numbers_is_fizzbuzz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i++) {
            if ($i % 5 == 0 && $i % 3 == 0) {
                $this->assertEquals('FizzBuzz', $numbers[$i]);
            }
        }
    }

    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }
}
