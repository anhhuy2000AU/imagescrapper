<?php

declare(strict_types = 1);

namespace anhhuy2000AU\ImageScrapper;

/**
 * Image Scrapper Interface
*/
interface ImageScrapperInterface
{

    /**
     * Grab images based on keyword
     *
     * @param string $keyword
     * @param string[] $options
     * @return string[] $results
     */
    public function grab(string $keyword, array $options = []): array;

}
