<?php
include 'Point.php';
include 'MoveablePoint.php';
$point=new Point(5,9);
echo $point->toString().'<br>';
$MovePoint=new MoveablePoint(5,9,3,1);
$MovePoint->move();
echo $MovePoint->toString().'<br>';
