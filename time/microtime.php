<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var_dump(microtime());
var_dump(microtime(1));
echo date('Y-m-d H:i:s', time());
echo date('Y-m-d H:i:s', microtime(1));
echo '<br/>';

list($usec, $sec) = explode(" ", microtime());
echo intval($usec * 1000000);
//echo (floatval($usec) + (float) $sec);
