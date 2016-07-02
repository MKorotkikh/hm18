<?php

class Rectangle extends Triangle {
    protected $x3;
    protected $y3;

    public function display() {
        $coordinates = parent::display();
        return $coordinates ."\n" . "x3 = " . $this -> x3 . " y3 = " . $this -> y3;
    }

    public function setX3($x) {
        $x = (integer) $x;
        $this -> x3 = $x;
        return $this -> x3;
    }

    public function setY3($y) {
        $y = (integer) $y;
        $this -> y3 = $y;
        return $this -> y3;
    }

    public function getX3(){
        return $this -> x3;
    }

    public function getY3(){
        return $this -> y3;
    }
}

?>