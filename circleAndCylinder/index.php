<?php
include 'circle.php';
include 'cylinder.php';
$circle=new circle(8,'blue');
$cylinder=new cylinder(10,'red',10);
echo 'Circle:  '.$circle->toString().'<br>';
echo 'Cylinder:   '.$cylinder->toString().'<br>';
echo 'Circle Area: '.$circle->area().'<br>';

