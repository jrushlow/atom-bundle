<?php


namespace Rushlow\Bundle\Atom\Validator;


use Rushlow\Bundle\Atom\Model\Feed;

class FeedValidator
{
    private Feed $feed;

    public function __construct(Feed $feed)
    {
        $this->feed = $feed;
    }

    public function isValid(): bool
    {
    }

    private function validateAuthor(): void
    {
        $authors = $this->feed->getAuthors();

        if (0 === $authors->count()) {
            // No author is set, each entry element must have an author

        }
    }

    private function entriesHaveAuthors(): bool
    {
        $entries = $this->feed->getEntries();

        if (0 === $entries->count()) {
            return false;
        }

        foreach ($entries as $entry) {
            if (0 === ($entry->getAuthors())->count()) {
                return false;
            }
        }

        return true;
    }
}