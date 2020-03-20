<?php

namespace Rushlow\Bundle\Atom\Model;

class Person
{
    private $id;
    private $name;
    private $uri;
    private $email;

    public function __construct(string $id, string $name, string $uri = null, string $email = null)
    {
    }
}
