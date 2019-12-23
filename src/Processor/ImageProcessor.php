<?php

declare(strict_types = 1);

namespace anhhuy2000au\ImageScrapper\Processor;

use anhhuy2000au\ImageScrapper\ImageScrapperInterface;
use anhhuy2000au\ImageScrapper\Repository\ImageRepositoryInterface;

class ImageProcessor
{

    /** @var $imageScrapperInterface */
    protected $imageScrapperInterface;

    /** @var $imageRepository */
    protected $imageRepositoryInterface;

    /**
     * Constructing function
     *
     * @param anhhuy2000au\ImageScrapper\ImageScrapperInterface $imageScrapperInterface
     * @param anhhuy2000au\ImageScrapper\Repository\ImageRepositoryInterface $imageRepositoryInterface
     */
    public function __construct(
        ImageScrapperInterface $imageScrapperInterface,
        ImageRepositoryInterface $imageRepositoryInterface
    )
    {
        $this->imageScrapperInterface = $imageScrapperInterface;
        $this->imageRepositoryInterface = $imageRepositoryInterface;
    }

    /**
     * Query Image from scrapper and convert to entity
     *
     * @param string $keyword
     * @return \App\Domain\ImageScrapper\Entity\ImageEntity[]
     */
    public function processImages(string $keyword): array
    {
        $imageEntities = [];

        $images = $this->imageScrapperInterface->grab($keyword);

        foreach ($images as $image) {
            $imageEntity = $this->imageRepositoryInterface->arrayToEntity($image);
            array_push($imageEntities, $imageEntity);
        }

        return $imageEntities;
    }

}
