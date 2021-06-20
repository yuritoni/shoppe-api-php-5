<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Add extends RequestParameters
{
    use CategoryIdTrait;

    public function getName()
    {
        return $this->parameters['name'];
    }

    /**
     * Name of the item in local language.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->parameters['name'] = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->parameters['description'];
    }

    /**
     * Description of the item in local language.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->parameters['description'] = $description;

        return $this;
    }

    public function getPrice()
    {
        return $this->parameters['price'];
    }

    /**
     * The current price of the item in the listing currency.
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->parameters['price'] = $price;

        return $this;
    }

    public function getStock()
    {
        return $this->parameters['stock'];
    }

    /**
     * The current stock quantity of the item.
     *
     * @param int $stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->parameters['stock'] = $stock;

        return $this;
    }

    public function getItemSku()
    {
        return $this->parameters['item_sku'];
    }

    /**
     * An item SKU (stock keeping unit) is an identifier defined by a seller, sometimes called parent SKU.
     * Item SKU can be assigned to an item in Shopee Listings.
     * @param string $itemSku
     * @return $this
     */
    public function setItemSku($itemSku)
    {
        $this->parameters['item_sku'] = $itemSku;

        return $this;
    }

    public function getVariations()
    {
        return $this->parameters['variations'];
    }

    /**
     * The variation of item is to list out all models of this product, for example,
     * iPhone has model of White and Black, then its variations includes "White iPhone" and "Black iPhone".
     *
     * @param Variations $variations
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->parameters['variations'] = $variations;

        return $this;
    }

    public function getImages()
    {
        return $this->parameters['images'];
    }

    /**
     * Image URLs of the item. Up to 9 images, max 2.0 MB each.Image format accepted: JPG, JPEG, PNG.
     * Suggested dimension: 1024 x 1024 px.
     *
     * @param Images $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->parameters['images'] = $images;

        return $this;
    }

    public function getAttributes()
    {
        return $this->parameters['attributes'];
    }

    /**
     * Should call shopee.item.GetAttributes to get attribute first. Should contain all all mandatory attribute.
     *
     * @param Attributes $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->parameters['attributes'] = $attributes;

        return $this;
    }

    public function getLogistics()
    {
        return $this->parameters['logistics'];
    }

    /**
     * Should call shopee.logistics.GetLogistics to get logistics first. Should contain all all logistics.
     *
     * @param Logistics $logistics
     * @return $this
     */
    public function setLogistics($logistics)
    {
        $this->parameters['logistics'] = $logistics;

        return $this;
    }

    public function getWeight()
    {
        return $this->parameters['weight'];
    }

    /**
     * The net weight of this item, the unit is KG.
     *
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->parameters['weight'] = $weight;

        return $this;
    }

    public function getPackageLength()
    {
        return $this->parameters['package_length'];
    }

    /**
     * The height of package for this single item, the unit is CM.
     *
     * @param int $packageLength
     * @return $this
     */
    public function setPackageLength($packageLength)
    {
        $this->parameters['package_length'] = $packageLength;

        return $this;
    }

    public function getPackageWidth()
    {
        return $this->parameters['package_width'];
    }

    /**
     * The height of package for this single item, the unit is CM.
     *
     * @param int $packageWidth
     * @return $this
     */
    public function setPackageWidth($packageWidth)
    {
        $this->parameters['package_width'] = $packageWidth;

        return $this;
    }

    public function getPackageHeight()
    {
        return $this->parameters['package_height'];
    }

    /**
     * The height of package for this single item, the unit is CM.
     * @param int $packageHeight
     * @return $this
     */
    public function setPackageHeight($packageHeight)
    {
        $this->parameters['package_height'] = $packageHeight;

        return $this;
    }

    public function getDaysToShip()
    {
        return $this->parameters['days_to_ship'];
    }

    /**
     * The days to ship. Only work for pre-order, it means this value should be bigger than 7.
     *
     * @param int $daysToShip
     * @return $this
     */
    public function setDaysToShip($daysToShip)
    {
        $this->parameters['days_to_ship'] = $daysToShip;

        return $this;
    }

    public function getWholesales()
    {
        return $this->parameters['wholesales'];
    }

    /**
     * The wholesales tier list. Please put the wholesale tier info in order by min count.
     *
     * @param Wholesales $wholesales
     * @return $this
     */
    public function setWholesales($wholesales)
    {
        $this->parameters['wholesales'] = $wholesales;

        return $this;
    }
}
