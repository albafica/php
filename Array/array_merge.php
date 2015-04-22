<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arr1 = null;
$arr2 = array(1, 2, 3);
$arr3 = array();
print_r(array_merge($arr1, $arr2));
print_r(array_merge($arr3, $arr2));


$a = array(
    1 => '1',
    3 => '3',
);
$b = array(
    2 => '2',
    4 => '4',
);
print_r(array_merge($a, $b));
print_r($a + $b);
