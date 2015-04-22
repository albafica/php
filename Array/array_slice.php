<?php

//$a = array(0 => "Dog", 1 => "Cat", 2 => "Horse", 3 => "Bird");
//print_r(array_slice($a, 0, 2));
//print_r($a);


$a1=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
$a2=array(0=>"Tiger",1=>"Lion");
$a2 = array_splice($a1,0,5);
print_r($a2);
print_r($a1);