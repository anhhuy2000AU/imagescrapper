<?php

declare(strict_types = 1);

namespace anhhuy2000AU\ImageScrapper;

use Buchin\GoogleImageGrabber\GoogleImageGrabber;

class GoogleImageScrapper implements ImageScrapperInterface
{

    /** @var \Buchin\GoogleImageGrabber\GoogleImageGrabber */
    protected $googleImageScrapper;

    /**
     * Constructor
     *
     * @param \Buchin\GoogleImageGrabber\GoogleImageGrabber $googleImageScrapper
     */
    public function __construct(
        GoogleImageGrabber $googleImageScrapper
    )
    {
        $this->googleImageScrapper = $googleImageScrapper;
    }

    /**
     * Grab images based on keyword
     *
     * @param string $keyword
     * @param string[] $options
     * @return string[] $results
     */
    public function grab(string $keyword, array $options = []): array
    {
        return $this->googleImageScrapper::grab($keyword);
    }

}
