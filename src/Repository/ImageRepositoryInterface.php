<?php

declare(strict_types = 1);

namespace anhhuy2000AU\ImageScrapper\Repository;

use anhhuy2000AU\ImageScrapper\Entity\AbstractImageEntity;

interface ImageRepositoryInterface
{

    /**
     * Convert array of images into entity
     *
     * @param string[] $image
     * @return \anhhuy2000AU\ImageScrapper\Entity\AbstractImageEntity
     */
    public function arrayToEntity(array $image): AbstractImageEntity;

}
