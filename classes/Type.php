<?php

include_once __DIR__ . '/Category.php';
class Type extends Category {
    public $typeName;
    
    function __construct($_categoryName, $_typeName){
        parent::__construct($_categoryName);
        $this->typeName = $_typeName;
    }
}
