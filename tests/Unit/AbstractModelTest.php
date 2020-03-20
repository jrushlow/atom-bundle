<?php

namespace Rushlow\Bundle\Atom\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Rushlow\Bundle\Atom\Tests\Contract\ModelUnitTestInterface;

abstract class AbstractModelTest extends TestCase implements ModelUnitTestInterface
{
    /**
     * @dataProvider requiredPropertyPerRFCDataProvider
     */
    public function testHasRequiredPropertyPerRFC(string $class, string $propertyName): void
    {
        self::assertClassHasAttribute($propertyName, $class, $this->getPropertyErrorMessage($class, $propertyName));
    }

    /**
     * @dataProvider optionalPropertyPerRFCDataProvider
     */
    public function testHasOptionalPropertyPerRFC(string $class, string $propertyName): void
    {
        self::assertClassHasAttribute($propertyName, $class, $this->getPropertyErrorMessage($class, $propertyName));
    }

    private function getPropertyErrorMessage(string $class, string $property): string
    {
        return \sprintf('%s does not have %s property defined as required to comply with RFC4287', $property, $class);
    }
}
