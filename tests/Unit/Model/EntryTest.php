<?php

namespace Rushlow\Bundle\Atom\Tests\Unit\Model;

use Rushlow\Bundle\Atom\Model\Entry;
use Rushlow\Bundle\Atom\Tests\Unit\AbstractModelTest;

class EntryTest extends AbstractModelTest
{
    public function requiredPropertyPerRFCDataProvider(): \Generator
    {
        $class = Entry::class;

        yield [$class, 'id'];
        yield [$class, 'title'];
        yield [$class, 'updated'];
    }

    public function optionalPropertyPerRFCDataProvider(): \Generator
    {
        $class = Entry::class;

        yield [$class, 'author'];
        yield [$class, 'category'];
        yield [$class, 'contributor'];
        yield [$class, 'link'];
        yield [$class, 'published'];
        yield [$class, 'rights'];
        yield [$class, 'source'];
        yield [$class, 'summary'];
    }
}
