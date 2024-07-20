<?php
require_once '../products/product.php';
class Furniture extends Product
{
    public float $height;
    public float $width;
    public float $length;
    public const PRODUCT_TYPE_FURNITURE = "Furniture";

    public function __construct(float $sku, string $name, float $price, float $height, float $width, float $length)
    {
        parent::__construct($sku, $name, $price, Furniture::PRODUCT_TYPE_FURNITURE);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
}
