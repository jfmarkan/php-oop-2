<?php
class Product {
    public $name;

    function __construct($_name){
        $this->name = $_name;
    }
}
class Category extends Product{
    public $categoryName;
    
    function __construct($_name, $_categoryName){
        parent::__construct($_name);
        $this->categoryName = $_categoryName;
    }
}

class Type extends Product{
    public $typeName;
    
    function __construct($_name, $_typeName){
        parent::__construct($_name);
        $this->typeName = $_typeName;
    }
}
/**
 * Product for products
 */
class Details extends Product {
    public $picture;
    public $brand;
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
    function __construct($_name, $_picture, $_brand, $_price, $_code){
        parent::__construct($_name);
        $this->brand = $_picture;
        $this->name = $_brand;
        $this->price = $_price;
        $this->code = $_code;
    }
}

$product = new Product('Comerla', new Category('Comerla', 'Perro'), new Type('Comerla', 'Comida'), new Details('Comerla','https://picsum.photos/200/300', 'Royal Canin', '30', '126133'));

var_dump($product);