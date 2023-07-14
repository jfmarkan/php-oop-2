<?php

include_once __DIR__ . '/Type.php';
class Product extends Type{
    public $brand;
    public $name;
    public $price;
    public $code;
    

    function __construct($_brand, $_name, $_price, $_code, $_category, $_type){
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->code = $_code;
        parent::__construct($_category, $_type);
    }
}