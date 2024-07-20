<?php
require_once '../products/product.php';
class Book extends Product
{
    public float $weight;
    public const PRODUCT_TYPE_BOOK = "Book";

    public function __construct(float $sku, string $name, float $price, float $weight)
    {
        parent::__construct($sku, $name, $price, Book::PRODUCT_TYPE_BOOK);
        $this->weight = $weight;
    }
}
