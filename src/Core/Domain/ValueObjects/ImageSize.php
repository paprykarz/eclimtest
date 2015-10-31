<?php

namespace Core\Domain\ValueObjects;

class ImageSize
{
    private $width;

    private $height;

    /**
     * undocumented function
     *
     * @return void
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * getWidth
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
}
