<?php
 
class Box {
    public $height;
    private $width;
    public $length;
 
    public function __construct($height=12, $width=12, $length=12) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
 
    public function setWidth($width){
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        } else{
            throw new Exeption('Width needs to be number and bigger than 0');
        }
    }
 
    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}
 
$Box1 = new Box(10, 10, 10);
$Box1->setWidth(20);
$volume = $Box1->volume();
var_dump($Box1);
var_dump($volume);
 
$Box2 = new Box(13, 11, 17);
$volume = $Box2->volume();
var_dump($Box2);
var_dump($volume);
 
$Box3 = new Box();
$volume = $Box3->volume();
var_dump($Box3);
var_dump($volume);
 