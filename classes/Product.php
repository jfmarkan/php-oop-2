<?php
class Product{
    public $code;

    function __construct($_code){
        $this->code = $_code;
    }

    public function getProductCode(){
        return $this->code;
    }
}