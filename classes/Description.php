<?php
class Description extends Product{
    public $name;
    public $picture;
    public $brand;
    public $price;
    public $category;
    public $type;

    function __construct($_category, $_type, $_code, $_name, $_picture, $_brand, $_price){
        $this->category = $_category;
        $this->type = $_type;
        parent::__construct($_code);
        $this->name = $_name;
        $this->picture = $_picture;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function getDescriptionName(){
        return $this->name;
    }

    public function getDescriptionPicture(){
        return $this->picture;
    }

    public function getDescriptionBrand(){
        return $this->brand;
    }

    public function getDescriptionPrice(){
        return $this->price;
    }
}