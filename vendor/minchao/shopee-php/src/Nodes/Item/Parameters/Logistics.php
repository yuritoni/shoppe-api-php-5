<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameterCollection;
use Shopee\RequestParametersInterface;

class Logistics extends RequestParameterCollection
{
    /**
     * @param Logistic|RequestParametersInterface $parameter
     * @return $this
     */
    public function add( $parameter)
    {
        parent::add($parameter);

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function fromArray( $parameters)
    {
        foreach ($parameters as $parameter) {
            $this->add(new Logistic($parameter));
        }

        return $this;
    }
}
