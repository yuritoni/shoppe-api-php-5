<?php

namespace Shopee;

use function array_map;

abstract class RequestParameterCollection implements RequestParametersInterface
{
    protected $parameters = [];

    public function __construct( $parameters = [])
    {
        $this->fromArray($parameters);
    }

    /**
     * @param RequestParametersInterface $parameter
     * @return $this
     */
    public function add( $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    abstract public function fromArray( $parameters);

    public function toArray(): array
    {
        return array_map(function ( $parameter) {
            return $parameter->toArray();
        }, $this->parameters);
    }
}
