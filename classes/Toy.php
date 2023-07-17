<?php

class Toy extends Product{
    public $material;
    public $color;
    public static $icon = '<i class="fa-solid fa-baseball"></i>';

    function __construct($_category, $_code, $_name, $_picture, $_brand, $_price, $_material, $_color)
    {
        parent::__construct($_category, $_code, $_name, $_picture, $_brand, $_price);
        $this->material = $_material;
        $this->color = $_color;
    }
}