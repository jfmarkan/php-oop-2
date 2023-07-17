<?php

class Food extends Product{
    public $protein;
    public $fat;
    public $fiber;
    public $humidity;
    public $minerals;
    public $calcium;
    public $phosforus;
    public static $icon = '<i class="fa-solid fa-bowl-food"></i>';

    function __construct($_category, $_code, $_name, $_picture, $_brand, $_price, $_protein, $_fat, $_fiber, $_humidity, $_minerals, $_calcium, $_phosforus){
        parent::__construct($_category, $_code, $_name, $_picture, $_brand, $_price);
        $this->protein = $_protein;
        $this->fat = $_fat;
        $this->fiber = $_fiber;
        $this->humidity = $_humidity;
        $this->minerals = $_minerals;
        $this->calcium = $_calcium;
        $this->phosforus = $_phosforus;
    }

    // Here I define all the other setters and Getters to move the info all around
}