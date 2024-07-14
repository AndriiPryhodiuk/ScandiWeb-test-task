<?php
require_once '../products/product.php';
class Dvd extends Product
{
    public float $size;
    public const PRODUCT_TYPE_DVD = "DVD";

    public function __construct(string $sku, string $name, float $price, float $size)
    {
        parent::__construct($sku, $name, $price, Dvd::PRODUCT_TYPE_DVD);
        $this->size = $size;
    }
}
