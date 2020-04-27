<?php

namespace Rushlow\Bundle\Atom\Collection;

abstract class AbstractCollection implements CollectionInterface
{
    private array $elements = [];

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->elements);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->elements[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->elements[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->elements[] = $value;

            return;
        }

        $this->elements[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->elements[$offset]);
    }

    public function count()
    {
        return \count($this->elements);
    }
}
