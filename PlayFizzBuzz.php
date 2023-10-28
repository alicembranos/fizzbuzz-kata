<?php

require_once "./vendor/autoload.php";

$fizzBuzz = new FizzBuzz();

for ($i = 0; $i <= 100; $i++) {
    echo $fizzBuzz->play($i) . PHP_EOL;
}
