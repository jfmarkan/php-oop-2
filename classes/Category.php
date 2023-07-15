<?php
class Category{
    public $category;
    public $categoryIcon;
    
    function __construct($_category, $_categoryIcon){
        $this->category = $_category;
        $this->categoryIcon = $_categoryIcon;
    }

    public function getCategoryIcon(){
        return $this->categoryIcon;
    }
}