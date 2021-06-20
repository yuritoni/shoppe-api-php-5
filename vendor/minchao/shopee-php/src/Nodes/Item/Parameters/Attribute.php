<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Attribute extends RequestParameters
{
    public function getAttributeId()
    {
        return $this->parameters['attributes_id'];
    }

    /**
     * @param int $attributeId
     * @return $this
     */
    public function setAttributeId($attributeId)
    {
        $this->parameters['attributes_id'] = $attributeId;

        return $this;
    }

    public function getValue()
    {
        return $this->parameters['value'];
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->parameters['value'] = $value;

        return $this;
    }
}
