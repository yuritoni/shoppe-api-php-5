<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\RequestParametersInterface;

class Images extends RequestParameterCollection
{
    /**
     * @param Image|RequestParametersInterface $parameter
     * @return $this
     */
    public function add($parameter)
    {
        parent::add($parameter);

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function fromArray($parameters)
    {
        foreach ($parameters as $parameter) {
            $this->add(new Image($parameter));
        }

        return $this;
    }
}
