<?php
class Type {
    public $type;
    public $typeIcon;
    
    function __construct($_type, $_typeIcon){
        $this->type = $_type;
        $this->typeIcon = $_typeIcon;
    }

    public function getTypeIcon(){
        return $this->typeIcon;
    }
}