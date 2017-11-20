<?php

namespace Classes;

class Figure{

    private $type=NULL;
    private $base=NULL;
    private $height=NULL;
    private $area = NULL;
    private $diameter = NULL;
    
    public function __construct($type,$arg1,$arg2){
        
        $this->type = $type;
        if($num_args == 2){ $this->diameter = $arg1; }
        if($num_args > 2){
            $this->base = $arg1;
            $this->height = $arg2;
        }
        $this->calculateArea();
    }

    public function getBase(){ return $this->base; }
    public function getHeight(){ return $this->height; }
    public function getArea(){ return $this->area; }
    public function getType(){ return $this->type; }    
    
    public function setBase($base){ if($this->type !== 'circle') $this->base = $base; }
    public function setHeight($height){ if($this->type !== 'circle')  $this->height = $height; }
    
    public function calculateArea(){
        if($this->type !== NULL){
            switch($this->type){
                case 'square': $this->area = $this->base * $this->height; break;
                case 'triangle': $this->area = ($this->base * $this->height)/2; break;
                case 'circle': $this->area = (($this->diameter/2)^2)*pi(); break;
            }
        }
    }
}

class Square extends Figure{
    
    public function __construct($base){ parent::__construct('square',$base,$base); }    
}

class Triangle extends Figure{
    
    public function __construct($base,$height){ parent::__construct('triangle',$base,$height); }
}

class Circle extends Figure{

    public function __construct($diameter){ parent::__construct('circle',$diameter); }

    public function getDiameter(){ return $this->diameter; }
    
    public function setDiameter($diameter){ $this->diameter = $diameter; }
    
}