<?php

namespace Rushlow\Bundle\Atom\Tests\Unit\Model;

use Rushlow\Bundle\Atom\Model\Content;
use Rushlow\Bundle\Atom\Tests\Unit\AbstractModelTest;

class ContentTest extends AbstractModelTest
{
    public function requiredPropertyPerRFCDataProvider(): \Generator
    {
        yield 'Content Property' => [Content::class, 'content'];
    }

    public function optionalPropertyPerRFCDataProvider(): \Generator
    {
        $class = Content::class;

        yield 'Type Property' => [$class, 'type'];
        yield 'Src Property' => [$class, 'src'];
    }
}
