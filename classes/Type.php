<?php

class ProductType extends Category {
    public $type;

    function __construct($_type){
        $this->type = $_type;
    }
}