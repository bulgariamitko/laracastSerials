<?php

namespace spec\Acme;

use Acme\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_translate_1_for_fizzbuzz()
    {
    	$this->execute(1)->shouldReturn(1);
    }

    function it_translate_2_for_fizzbuzz()
    {
    	$this->execute(2)->shouldReturn(2);
    }

    function it_translate_3_for_fizzbuzz()
    {
    	$this->execute(3)->shouldReturn('Fizz');
    }

    function it_translate_5_for_fizzbuzz()
    {
    	$this->execute(5)->shouldReturn('Buzz');
    }

    function it_translate_6_for_fizzbuzz()
    {
    	$this->execute(6)->shouldReturn('Fizz');
    }

    function it_translate_10_for_fizzbuzz()
    {
    	$this->execute(10)->shouldReturn('Buzz');
    }

    function it_translate_15_for_fizzbuzz()
    {
    	$this->execute(15)->shouldReturn('FizzBuzz');
    }

    function it_translate_123_for_fizzbuzz()
    {
    	$this->execute(123)->shouldReturn('Fizz');
    }

    function it_translate_a_sequence_of_numbers_for_fizzbuzz()
    {
    	$this->executeUpTo(10)->shouldReturn([1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz']);
    }
}
