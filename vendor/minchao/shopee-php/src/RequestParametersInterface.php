<?php

namespace Shopee;

interface RequestParametersInterface
{
    /**
     * @param array $parameters
     * @return $this
     */
    public function fromArray( $parameters);

    public function toArray();
}
