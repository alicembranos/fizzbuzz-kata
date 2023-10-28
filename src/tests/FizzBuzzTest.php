<?php

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /** @test */
    public function should_return_same_number_when_number_it_is_not_multiple_of_three_or_five()
    {
        // GIVEN
        $fizzBuzz = new FizzBuzz();
        $number = 1;

        // WHEN
        $result = $fizzBuzz->play($number);

        // THEN
        $this->assertEquals($number, $result);
    }

    /** @test */
    public function should_return_Fizz_when_number_is_multiple_of_three()
    {
        // GIVEN
        $fizzBuzz = new FizzBuzz();
        $number = 3;

        // WHEN
        $result = $fizzBuzz->play($number);

        // THEN
        $this->assertEquals('Fizz', $result);
    }

    /** @test */
    public function should_return_Buzz_when_number_is_multiple_of_five()
    {
        // GIVEN
        $fizzBuzz = new FizzBuzz();
        $number = 5;

        // WHEN
        $result = $fizzBuzz->play($number);

        // THEN
        $this->assertEquals('Buzz', $result);
    }

    /** @test */
    public function should_return_FizzBuzz_when_number_is_multiple_of_three_and_five()
    {
        // GIVEN
        $fizzBuzz = new FizzBuzz();
        $number = 15;

        // WHEN
        $result = $fizzBuzz->play($number);

        // THEN
        $this->assertEquals('FizzBuzz', $result);
    }
}
