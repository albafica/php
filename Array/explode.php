<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$string = '';
var_dump(explode(chr(16), $string));
$array = explode(chr(16), $string);
var_dump(empty($array));

$string1 = 'sda' . '++++' . 'sdasda' . '++++' . 'sdasda';
var_dump(explode('++++', $string1, 2));
