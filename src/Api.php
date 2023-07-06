<?php

namespace louis\OssTd2;

use Symfony\Component\DomCrawler\Crawler;

class Api
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string[]
     */
    public function getAllCharacters(): array
    {
        $html = @file_get_contents($this->url);
        if ($html === false) {
            throw new \Exception("Failed to fetch the content from the URL.");
        }

        $crawler = new Crawler($html);

        $links = $crawler->filter('.lightbox-caption')->each(function (Crawler $node) {
            return $node->text();
        });

        return $links;
    }
}
