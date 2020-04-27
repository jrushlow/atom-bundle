<?php

namespace Rushlow\Bundle\Atom\Model;

class Person
{
    private string $id;
    private string $name;
    private ?string $uri;
    private ?string $email;

    public function __construct(string $id, string $name, string $uri = null, string $email = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->uri = $uri;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }
}
