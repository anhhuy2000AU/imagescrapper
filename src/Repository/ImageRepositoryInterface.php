<?php

declare(strict_types = 1);

namespace anhhuy2000au\ImageScrapper\Repository;

use anhhuy2000au\ImageScrapper\Entity\AbstractImageEntity;

interface ImageRepositoryInterface
{

    /**
     * Convert array of images into entity
     *
     * @param string[] $image
     * @return \anhhuy2000au\ImageScrapper\Entity\AbstractImageEntity
     */
    public function arrayToEntity(array $image): AbstractImageEntity;

}
