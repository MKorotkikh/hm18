<?php

class Point {

    protected $x1;
    protected $y1;

    public function display() {
        return "x1 = " . $this -> x1 . " y1 = " . $this -> y1;
    }

    public function setX1($x) {
        $x = (integer) $x;
        $this -> x1 = $x;
        return $this -> x1;
    }

    public function setY1($y) {
        $y = (integer) $y;
        $this -> y1 = $y;
        return $this -> y1;
    }

    public function getX1(){
        return $this -> x1;
    }

    public function getY1(){
        return $this -> y1;
    }
}

?>