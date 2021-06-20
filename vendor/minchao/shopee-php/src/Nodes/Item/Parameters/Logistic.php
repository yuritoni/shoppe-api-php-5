<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Logistic extends RequestParameters
{
    public function getLogisticId()
    {
        return $this->parameters['logistic_id'];
    }

    /**
     * Related to shopee.logistics.GetLogistics result.logistics.logistic_id
     *
     * @param $logisticId
     * @return $this
     */
    public function setLogisticId( $logisticId)
    {
        $this->parameters['logistic_id'] = $logisticId;

        return $this;
    }

    public function getEnabled()
    {
        return $this->parameters['enabled'];
    }

    /**
     * Related to shopee.logistics.GetLogistics result.logistics.enabled only affect current item
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled( $enabled)
    {
        $this->parameters['enabled'] = $enabled;

        return $this;
    }

    public function getShippingFee()
    {
        return $this->parameters['shipping_fee'];
    }

    /**
     * Only needed when logistics fee_type = CUSTOM_PRICE.
     *
     * @param float $shippingFee
     * @return $this
     */
    public function setShippingFee( $shippingFee)
    {
        $this->parameters['shipping_fee'] = $shippingFee;

        return $this;
    }

    public function getSizeId()
    {
        return $this->parameters['size_id'];
    }

    /**
     * If specify logistic fee_type is SIZE_SELECTION size_id is required
     *
     * @param int $sizeId
     * @return $this
     */
    public function setSizeId( $sizeId)
    {
        $this->parameters['size_id'] = $sizeId;

        return $this;
    }

    public function getIsFree()
    {
        return $this->parameters['is_free'];
    }

    /**
     * When seller chooses this option, the shipping fee of this channel on item will be set to 0.
     * Default value is False.
     *
     * @param bool $isFree
     * @return $this
     */
    public function setIsFree( $isFree = false)
    {
        $this->parameters['is_free'] = $isFree;

        return $this;
    }
}
