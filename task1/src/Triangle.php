<?php

class Triangle extends Line {
    protected $x4;
    protected $y4;

    public function display() {
        $coordinates = parent::display();
        return $coordinates . "\n" . "x4 = " . $this -> x4 . " y4 = " . $this -> y4;
    }

    public function setX4($x) {
        $x = (integer) $x;
        $this -> x4 = $x;
        return $this -> x4;
    }

    public function setY4($y) {
        $y = (integer) $y;
        $this -> y4 = $y;
        return $this -> y4;
    }

    public function getX4(){
        return $this -> x4;
    }

    public function getY4(){
        return $this -> y4;
    }
}

?>