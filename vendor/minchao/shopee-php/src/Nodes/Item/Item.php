<?php

namespace Shopee\Nodes\Item;

use Shopee\Nodes\NodeAbstract;
use Shopee\ResponseData;

class Item extends NodeAbstract
{
    /**
     * Use this call to add a product item.
     *
     * @param array|Parameters\Add $parameters
     * @return ResponseData
     */
    public function add($parameters = [])
    {
        return $this->post('/api/v1/item/add', $parameters);
    }

    /**
     * Use this call to add product item images.
     *
     * @param array|Parameters\AddItemImg $parameters
     * @return ResponseData
     */
    public function addItemImg($parameters = [])
    {
        return $this->post('/api/v1/item/img/add', $parameters);
    }

    /**
     * Use this call to add item variations.
     *
     * @param array|Parameters\AddVariations $parameters
     * @return ResponseData
     */
    public function addVariations($parameters = [])
    {
        return $this->post('/api/v1/item/add_variations', $parameters);
    }

    /**
     * Use this api to boost multiple items at once.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function boostItem($parameters = [])
    {
        return $this->post('/api/v1/items/boost', $parameters);
    }

    /**
     * Use this call to delete a product item.
     *
     * @param array|Parameters\Delete $parameters
     * @return ResponseData
     */
    public function delete($parameters = [])
    {
        return $this->post('/api/v1/item/delete', $parameters);
    }

    /**
     * Use this call to delete a product item image.
     *
     * @param array|Parameters\DeleteItemImg $parameters
     * @return ResponseData
     */
    public function deleteItemImg($parameters = [])
    {
        return $this->post('/api/v1/item/img/delete', $parameters);
    }

    /**
     * Use this call to delete item variation.
     *
     * @param array|Parameters\DeleteVariation $parameters
     * @return ResponseData
     */
    public function deleteVariation($parameters = [])
    {
        return $this->post('/api/v1/item/delete_variation', $parameters);
    }

    /**
     * Use this call to get attributes of product item.
     *
     * @param array|Parameters\GetAttributes $parameters
     * @return ResponseData
     */
    public function getAttributes($parameters = [])
    {
        return $this->post('/api/v1/item/attributes/get', $parameters);
    }

    /**
     * Use this api to get all boosted items.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getBoostedItems($parameters = [])
    {
        return $this->post('/api/v1/items/get_boosted', $parameters);
    }

    /**
     * Use this call to get categories of product item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getCategories($parameters = [])
    {
        return $this->post('/api/v1/item/categories/get', $parameters);
    }

    /**
     * Use this api to get comment by shopid/itemid/comment_id
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getComment($parameters = [])
    {
        return $this->post('/api/v1/items/comments/get', $parameters);
    }

    /**
     * Use this call to get detail of item.
     *
     * @param array|Parameters\GetItemDetail $parameters
     * @return ResponseData
     */
    public function getItemDetail($parameters = [])
    {
        return $this->post('/api/v1/item/get', $parameters);
    }

    /**
     * Use this call to get a list of items.
     *
     * @param array|Parameters\GetItemsList $parameters
     * @return ResponseData
     */
    public function getItemsList($parameters = [])
    {
        return $this->post('/api/v1/items/get', $parameters);
    }

    /**
     * Use this api to get ongoing and upcoming promotions.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getPromotionInfo($parameters = [])
    {
        return $this->post('/api/v1/item/promotion/get', $parameters);
    }

    /**
     * Use this API to get recommended category ids according to item name.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getRecommendCats($parameters = [])
    {
        return $this->post('/api/v1/item/categories/get_recommend', $parameters);
    }

    /**
     * Use this call to add one item image in assigned position.
     *
     * @param array|Parameters\InsertItemImg $parameters
     * @return ResponseData
     */
    public function insertItemImg($parameters = [])
    {
        return $this->post('/api/v1/item/img/insert', $parameters);
    }

    /**
     * Use this api to reply comments from buyers in batch.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function replyComments($parameters = [])
    {
        return $this->post('/api/v1/items/comments/reply', $parameters);
    }

    /**
     * Only for TW whitelisted shop. Use this API to set the installment tenures of items.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function setItemInstallmentTenures($parameters = [])
    {
        return $this->post('/api/v1/item/installment/set', $parameters);
    }

    /**
     * Use this call to update a product item.
     *
     * @param array|Parameters\UpdateItem $parameters
     * @return ResponseData
     */
    public function updateItem($parameters = [])
    {
        return $this->post('/api/v1/item/update', $parameters);
    }

    /**
     * Override and update all the existing images of an item.
     *
     * @param array|Parameters\UpdateItemImg $parameters
     * @return ResponseData
     */
    public function updateItemImage($parameters = [])
    {
        return $this->post('/api/v1/item/img/update', $parameters);
    }

    /**
     * Use this call to update item price.
     *
     * @param array|Parameters\UpdatePrice $parameters
     * @return ResponseData
     */
    public function updatePrice($parameters = [])
    {
        return $this->post('/api/v1/items/update_price', $parameters);
    }

    /**
     * Update items price in batch.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updatePriceBatch($parameters = [])
    {
        return $this->post('/api/v1/items/update/items_price', $parameters);
    }

    /**
     * Use this call to update item stock.
     *
     * @param array|Parameters\UpdateStock $parameters
     * @return ResponseData
     */
    public function updateStock($parameters = [])
    {
        return $this->post('/api/v1/items/update_stock', $parameters);
    }

    /**
     * Update items stock in batch.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateStockBatch($parameters = [])
    {
        return $this->post('/api/v1/items/update/items_stock', $parameters);
    }

    /**
     * Use this call to update item variation price.
     *
     * @param array|Parameters\UpdateVariationPrice $parameters
     * @return ResponseData
     */
    public function updateVariationPrice($parameters = [])
    {
        return $this->post('/api/v1/items/update_variation_price', $parameters);
    }

    /**
     * Update variations price in batch.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateVariationPriceBatch($parameters = [])
    {
        return $this->post('/api/v1/items/update/vars_price', $parameters);
    }

    /**
     * Use this call to update item variation stock.
     *
     * @param array|Parameters\UpdateVariationStock $parameters
     * @return ResponseData
     */
    public function updateVariationStock($parameters = [])
    {
        return $this->post('/api/v1/items/update_variation_stock', $parameters);
    }

    /**
     * Update variations stock in batch.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateVariationStockBatch($parameters = [])
    {
        return $this->post('/api/v1/items/update/vars_stock', $parameters);
    }

    /**
     * Use this call to unlist or list items in batch.
     *
     * @param array|Parameters\UpdateVariationStock $parameters
     * @return ResponseData
     */
    public function unlistItem($parameters = [])
    {
        return $this->post('/api/v1/items/unlist', $parameters);
    }
}
