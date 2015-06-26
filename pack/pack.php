<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$max_size = 15728640;
$ver = '$Rev$';
$data = pack('V1a*', $max_size, $ver);
var_dump($data);
var_dump(unpack('V1a*', $data));

//echo pack("C3", 80, 72, 80), '<br/>';
var_dump(pack("nn", 0x1234, 0x5678));

$data = pack('n', 4660);
var_dump($data);
var_dump(unpack('n', $data));
//echo pack("C*", 80, 72, 81), '<br/>';
