<?php

final readonly class FizzBuzz
{
    const FIZZ_MULTIPLIER = 3;
    const BUZZ_MULTIPLIER = 5;
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function play(int $number): string
    {
        $fizzBuzzValue = null;
        if ($this->isMultipleOf($number, self::FIZZ_MULTIPLIER)) {
            $fizzBuzzValue .= self::FIZZ;
        }

        if ($this->isMultipleOf($number, self::BUZZ_MULTIPLIER)) {
            $fizzBuzzValue .= self::BUZZ;
        }

        if ($fizzBuzzValue === null) {
            $fizzBuzzValue = $number;
        }

        return (string)$fizzBuzzValue;
    }

    private function isMultipleOf(int $number, int $divider): bool
    {
        return ($number % $divider === 0);
    }
}
