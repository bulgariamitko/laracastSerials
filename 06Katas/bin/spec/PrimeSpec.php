<?php

namespace spec;

use Prime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Prime::class);
    }
}
