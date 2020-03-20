<?php

declare(strict_types=1);

namespace Rushlow\Bundle\Atom\Tests\Unit\Model;

use Rushlow\Bundle\Atom\Model\Person;
use Rushlow\Bundle\Atom\Tests\Unit\AbstractModelTest;

class PersonTest extends AbstractModelTest
{
    public function requiredPropertyPerRFCDataProvider(): \Generator
    {
        $class = Person::class;

        yield 'Name property' => [$class, 'name'];
    }

    public function optionalPropertyPerRFCDataProvider(): \Generator
    {
        $class = Person::class;

        yield 'Email property' => [$class, 'email'];
        yield 'Uri property' => [$class, 'uri'];
    }
}
