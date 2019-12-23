<?php

declare(strict_types = 1);

namespace anhhuy2000au\ImageScrapper\Repository;

use anhhuy2000au\ImageScrapper\Entity\DefaultImageEntity;

class DefaultRepository implements \anhhuy2000au\ImageScrapper\Repository\ImageRepositoryInterface
{

    /**
     * Convert array of images into entity
     *
     * @param string[] $image
     * @return \anhhuy2000au\ImageScrapper\Entity\DefaultImageEntity
     */
    public function arrayToEntity(array $image): DefaultImageEntity
    {
        $imageEntity = new DefaultImageEntity;

        $imageEntity->setKeyword((string) ($image['keyword'] ?? ''));
        $imageEntity->setSlug((string) ($image['slug'] ?? ''));
        $imageEntity->setTitle((string) ($image['title'] ?? ''));
        $imageEntity->setUrl((string) ($image['url'] ?? ''));
        $imageEntity->setFiletype((string) ($image['filetype'] ?? ''));
        $imageEntity->setWidth((int) ($image['width'] ?? 0));
        $imageEntity->setHeight((int) ($image['height'] ?? 0));
        $imageEntity->setSource((string) ($image['source'] ?? ''));

        return $imageEntity;
    }

}
