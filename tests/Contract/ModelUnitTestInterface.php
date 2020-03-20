<?php

declare(strict_types=1);

namespace Rushlow\Bundle\Atom\Tests\Contract;

interface ModelUnitTestInterface
{
    public function testHasRequiredPropertyPerRFC(string $class, string $propertyName): void;

    public function requiredPropertyPerRFCDataProvider(): \Generator;

    public function testHasOptionalPropertyPerRFC(string $class, string $propertyName): void;

    public function optionalPropertyPerRFCDataProvider(): \Generator;
}
