<?php
include "Shape.php";
include 'Triangle.php';
$shape=new Shape('Tri','blue');
$triangle=new Triangle();
$triangle->setSide1(8);
$triangle->setSide2(1);
$triangle->setSide3(2);
echo $triangle->toString();