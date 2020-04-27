<?php

namespace Rushlow\Bundle\Atom\Model;

use Rushlow\Bundle\Atom\Collection\PersonCollection;

class Feed
{
    /**
     * MUST have author(s) unless all of the entry elements
     * have at least one author set.
     */
    private PersonCollection $author;

    private array $category = [];

    private PersonCollection $contributor;

    private array $entry = [];

    private ?string $generator;

    private ?string $icon;

    private ?string $logo;

    private string $id;

    private ?array $link;

    private ?string $rights;

    private ?string $subtitle;

    private string $title;

    private \DateTimeImmutable $updated;

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }
}
