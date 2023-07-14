<?php

include_once __DIR__ . '/Category.php';
class Type extends Category{
    public $type;

    function __construct($_type, $_category){
        $this->type = $_type;
        parent::__construct($_category);
    }
}