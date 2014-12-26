<?php
// array_walk_recursive fails to change your array unless you pass by reference.
// // Don't return values from your filter function, even though it's quite logical at a glance!
//function bad_example($item,$key){
//    if($key=='test'){
//        return 'PHP Rocks';  // Don't do it
//    }else{
//       return $item;  // Don't do this either
//    }
// }
//
//// array_walk_recursive pass-by-reference example
//function good_example(&$item,$key){
//    if($key=='test'){
//         $item='PHP Rocks'; // Do This!
//    }
// }
//
//$arr = array('a'=>'1','b'=>'2','test'=>'Replace This');
//
//array_walk_recursive($arr,'bad_example');
//var_dump($arr);
///**
//  * no errors, but prints...
//  * array('a'=>'1','b'=>'2','test'=>'Replace This');
//  */
//
//array_walk_recursive($arr,'good_example');
//var_dump($arr);
///**
//  * prints...
//  * array('a'=>'1','b'=>'2','test'=>'PHP Rocks');
//  */

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');
var_dump($fruits);
function test(&$arr){
    if(is_array($arr)){
        foreach ($arr as $key => &$value) {
            test($value);
        }
    }  else {
        $arr = '改造' . $arr;
    }
}
test($fruits);
var_dump($fruits);