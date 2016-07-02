<?php

class Line extends Point {
    protected $x2;
    protected $y2;

    public function display() {
        $coordinates = parent::display();
        return $coordinates ."\n" . "x2 = " . $this -> x2 . " y2 = " . $this -> y2;
    }

    public function setX2($x) {
        $x = (integer) $x;
        $this -> x2 = $x;
        return $this -> x2;
    }

    public function setY2($y) {
        $y = (integer) $y;
        $this -> y2 = $y;
        return $this -> y2;
    }

    public function getX2(){
        return $this -> x2;
    }

    public function getY2(){
        return $this -> y2;
    }
}

?>