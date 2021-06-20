<?php

namespace Shopee\Nodes\Shop;

use Shopee\Nodes\NodeAbstract;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Shop extends NodeAbstract
{
    /**
     * Use this call to get information of shop.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getShopInfo($parameters = [])
    {
        return $this->post('/api/v1/shop/get', $parameters);
    }

    /**
     * Shop performance includes the indexes from "My Performance" of Seller Center.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function performance($parameters = []){
        return $this->post('/api/v1/shop/performance', $parameters);
    }

    /**
     * Only for TW whitelisted shop.Use this API to set the installment status of shop.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function setShopInstallmentStatus($parameters = [])
    {
        return $this->post('/api/v1/shop/set_installment_status', $parameters);
    }

    /**
     * Use this call to update information of shop.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function updateShopInfo($parameters = [])
    {
        return $this->post('/api/v1/shop/update', $parameters);
    }
}
