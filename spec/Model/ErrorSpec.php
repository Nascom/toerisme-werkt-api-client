<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model;

use Nascom\ToerismeWerktApiClient\Model\Error;
use PhpSpec\ObjectBehavior;

class ErrorSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Title', 'Description');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Error::class);
    }

    function it_has_a_title()
    {
        $this->getTitle()->shouldBeString();
    }

    function it_has_a_description()
    {
        $this->getDescription()->shouldBeString();
    }
}
