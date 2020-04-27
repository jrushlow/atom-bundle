<?php

namespace Rushlow\Bundle\Atom\Model;

use Rushlow\Bundle\Atom\Collection\PersonCollection;

class Entry
{
    /**
     * An Author MUST be set unless the Src or Feed elements
     * have an author(s).
     */
    private PersonCollection $author;

    /**
     * @var array<string>
     */
    private array $category = [];

    private Content $content;

    private PersonCollection $contributor;

    private string $id;

    /**
     * If $content not set, MUST have at least 1 link with
     * a rel attribute value of "alternate" - MUST NOT contain
     * more than one atom:link element with a rel attribute
     * value of "alternate" that has the same combination of
     * type and hreflang attribute values.
     *
     * @var array<string>
     */
    private array $link = [];

    private ?\DateTimeImmutable $published;

    private ?string $rights;

    private ?string $source;

    /**
     * MUST contain a summary IF $src is set or content is base64 encoded but
     * encoded data is not XML media type, begins with text/ or ends with /xml
     * or +xml.
     */
    private string $summary;

    private string $title;

    private \DateTimeImmutable $updated;

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
