<?php
class Product
{
    public string $sku;
    public string $name;
    public float $price;
    public string $productType;

    public function __construct(string $sku, string $name, float $price, string $productType)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
    }
}
