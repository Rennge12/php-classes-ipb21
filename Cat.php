<?php
class Cat{
    public $name;
    private $age=0;

    public function __construct($name){
        echo $this->$name=$name;
    }
    public function birthday($age){
        $age++;
    }
    static function meow(){
        echo "Murrrrrrrrrrrr...>!!!!????";
    }
}