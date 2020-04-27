<?php

namespace Rushlow\Bundle\Atom\Collection;

use Rushlow\Bundle\Atom\Model\Person;

class PersonCollection extends AbstractCollection
{
    public function addPerson(Person $person): void
    {
        $this->offsetSet($person->getId(), $person);
    }

    public function removePerson(Person $person): void
    {
        $this->offsetUnset($person->getId());
    }
}
