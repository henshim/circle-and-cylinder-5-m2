<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$hinh1=new Circle(5,'red');
echo 'Circle area: '.$hinh1->getArea().'<br>';
echo 'Circle color: '.$hinh1->getColor().'<br>';

$hinh2=new Cylinder(6,'pink',7);
echo 'Cylinder area: '.$hinh2->getVolume().'<br>';
echo 'Cylinder color: '.$hinh2->getColor().'<br>';