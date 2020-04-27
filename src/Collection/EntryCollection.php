<?php


namespace Rushlow\Bundle\Atom\Collection;


use Rushlow\Bundle\Atom\Model\Entry;

class EntryCollection extends AbstractCollection
{
    public function addEntry(Entry $entry): void
    {
        $this->offsetSet($entry->getId(), $entry);
    }

    public function removeEntry(Entry $entry): void
    {
        $this->offsetUnset($entry->getId());
    }
}