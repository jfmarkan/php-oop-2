<?php

include_once __DIR__ . '/Cage.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/Toy.php';
class Product{
    public $code;
    public $name;
    public $picture;
    public $brand;
    public $price;
    public $category;

    function __construct($_category, $_code, $_name, $_picture, $_brand, $_price){
        $this->category = $_category;
        $this->code = $_code;
        $this->name = $_name;
        $this->picture = $_picture;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function getProductCode(){
        return $this->code;
    }

    public function getProductName(){
        return $this->name;
    }

    public function getProductPicture(){
        return $this->picture;
    }

    public function getProductBrand(){
        return $this->brand;
    }

    public function getProductPrice(){
        return $this->price;
    }

    public function getProductCategory(){
        return $this->category;
    }
}