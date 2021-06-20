<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class DeleteItemImg extends RequestParameters
{
    use ItemTrait;

    /**
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->parameters['images'];
    }

    /**
     * @param string[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->parameters['images'] = $images;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getPositions()
    {
        return $this->parameters['positions'];
    }

    /**
     * @param int[] $positions
     * @return $this
     */
    public function setPositions( $positions)
    {
        $this->parameters['positions'] = $positions;

        return $this;
    }
}
