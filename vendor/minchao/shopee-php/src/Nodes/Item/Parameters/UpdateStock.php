<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class UpdateStock extends RequestParameters
{
    use ItemTrait;

    public function getStock()
    {
        return $this->parameters['stock'];
    }

    /**
     * Specify the updated stock quantity.
     *
     * @param int $stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->parameters['stock'] = $stock;

        return $this;
    }
}
