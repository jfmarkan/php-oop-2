<?php

include_once __DIR__ . '/Type.php';

/**
 * Product for products
 */
class Product extends Type {
    public $brand;
    public $name;
    public $price;
    public $code;
    
    /**
     * A function that creates a new product.
     *
     * @param [String] $_categoryName - The name of the category the product Belongs to
     * @param [String] $_typeName - The type of product it is
     * @param [String] $_brand - The brand that manufactures the product
     * @param [String] $_name - The name of the product
     * @param [String] $_price - The product price
     * @param [String] $_code - The product code
     */
    function __construct($_categoryName, $_typeName, $_brand, $_name, $_price, $_code){
        parent::__construct($_categoryName, $_typeName);
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->code = $_code;
    }
}