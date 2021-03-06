<?php

namespace Shopee\Nodes\Item\Parameters;

trait ItemTrait
{
    public function getItemId()
    {
        return $this->parameters['item_id'];
    }

    /**
     * Set the Shopee's unique identifier for an item
     *
     * @param int $itemId
     * @return $this
     */
    public function setItemId( $itemId)
    {
        $this->parameters['item_id'] = $itemId;

        return $this;
    }
}
