<?php

namespace Rushlow\Bundle\Atom\Tests\Unit\Model;

use Rushlow\Bundle\Atom\Model\Feed;
use Rushlow\Bundle\Atom\Tests\Unit\AbstractModelTest;

class FeedTest extends AbstractModelTest
{
    public function requiredPropertyPerRFCDataProvider(): \Generator
    {
        $class = Feed::class;

        yield [$class, 'id'];
        yield [$class, 'title'];
        yield [$class, 'updated'];
    }

    public function optionalPropertyPerRFCDataProvider(): \Generator
    {
        $class = Feed::class;

        yield [$class, 'author'];
        yield [$class, 'category'];
        yield [$class, 'contributor'];
        yield [$class, 'icon'];
        yield [$class, 'link'];
        yield [$class, 'logo'];
        yield [$class, 'rights'];
        yield [$class, 'subtitle'];
    }
}
