<?php

class Cage extends Product{
    public $petSize;
    public $cageLength;
    public $cageWidth;
    public $cageHeight;
    public static $icon = '<i class="fa-solid fa-suitcase"></i>';

    function __construct($_category, $_code, $_name, $_picture, $_brand, $_price, $_petSize, $_cageLength, $_cageWidth, $_cageHeight){
        parent::__construct($_category, $_code, $_name, $_picture, $_brand, $_price);
        $this->petSize = $_petSize;
        $this->cageLength = $_cageLength;
        $this->cageWidth = $_cageWidth;
        $this->cageHeight = $_cageHeight;
    }
}