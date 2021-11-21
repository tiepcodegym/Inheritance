<?php
include 'point2d.php';
include 'point3d.php';
$point2=new point2d(2,5);
echo $point2->toString().'<br>';
$point3=new point3d(4,3,2);
$point3->setZ(4);
echo $point3->toString().'<br>';
