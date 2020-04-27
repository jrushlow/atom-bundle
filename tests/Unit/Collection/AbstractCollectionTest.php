<?php

namespace Rushlow\Bundle\Atom\Tests\Unit\Collection;

use PHPUnit\Framework\TestCase;
use Rushlow\Bundle\Atom\Collection\AbstractCollection;

class AbstractCollectionTest extends TestCase
{
    public function testAbstractCollectionIsCompatibleWithInterfaces(): void
    {
        $collection = new CollectionFixture();

        $interfaces = [\ArrayAccess::class, \Countable::class, \IteratorAggregate::class];

        foreach ($interfaces as $interface) {
            self::assertInstanceOf($interface, $collection);
        }
    }
}

class CollectionFixture extends AbstractCollection
{
}
