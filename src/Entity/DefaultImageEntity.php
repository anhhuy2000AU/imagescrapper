<?php

declare(strict_types = 1);

namespace anhhuy2000AU\ImageScrapper\Entity;

class DefaultImageEntity extends \anhhuy2000AU\ImageScrapper\Entity\AbstractImageEntity
{

    /**
     * @var string
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @OA\Property()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="keyword", type="string", length=500, nullable=true)
     * @OA\Property()
     */
    private $keyword;

    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=500, nullable=true)
     * @OA\Property()
     */
    private $slug;

    /**
     * @var string|null
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @OA\Property()
     */
    private $title;

    /**
     * @var string|null
     * @ORM\Column(name="url", type="string", length=500, nullable=true)
     * @OA\Property()
     */
    private $url;

    /**
     * @var string|null
     * @ORM\Column(name="filetype", type="string", length=45, nullable=true)
     * @OA\Property()
     */
    private $filetype;

    /**
     * @var int|null
     * @ORM\Column(name="width", type="smallint", nullable=true)
     */
    private $width;

    /**
     * @var int|null
     * @ORM\Column(name="height", type="smallint", nullable=true)
     */
    private $height;

    /**
     * @var string|null
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     * @OA\Property()
     */
    private $source;

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set keyword.
     *
     * @param string $keyword
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setKeyword(string $keyword): DefaultImageEntity
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword.
     *
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setSlug(string $slug): DefaultImageEntity
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setTitle(?string $title = null): DefaultImageEntity
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set url.
     *
     * @param string|null $url
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setUrl(?string $url = null): DefaultImageEntity
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Set filetype.
     *
     * @param string|null $filetype
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setFiletype(?string $filetype = null): DefaultImageEntity
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * Get filetype.
     *
     * @return string|null
     */
    public function getFiletype(): ?string
    {
        return $this->filetype;
    }

    /**
     * Set width.
     *
     * @param int|null $width
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setWidth(?int $width = null): DefaultImageEntity
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width.
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Set height.
     *
     * @param int|null $height
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setHeight(?int $height = null): DefaultImageEntity
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Set source.
     *
     * @param string|null $source
     * @return \anhhuy2000AU\ImageScrapper\Entity\DefaultImageEntity
     */
    public function setSource(?string $source = null): DefaultImageEntity
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source.
     *
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
}
