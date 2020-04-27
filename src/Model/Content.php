<?php

namespace Rushlow\Bundle\Atom\Model;

class Content
{
    /**
     * MAY be one of text, html, xhtml OR mime media type.
     *
     * Defaults to text IF $type and $src are NOT set.
     */
    private ?string $type;

    /**
     * If set, MUST be an IRI reference.
     *
     * If is set, $content MUST be empty & $type MUST be a mime media
     * type IF set.
     */
    private ?string $src;

    private ?string $content;

    public function __construct(string $type = null, string $src = null, string $content = null)
    {
        $this->type = $type;
        $this->src = $src;
        $this->content = $content;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }
}
