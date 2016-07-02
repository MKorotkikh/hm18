<?php
function __autoload($class)
{
    require_once "src/$class.php";
}

$line = new Line;

$line -> setX1(2);
$line -> setX2(3);

$line -> setY1(4);
$line -> setY2(5);

$disp = $line -> display();

echo $disp;
?>