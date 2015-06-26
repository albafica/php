<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$_bsize_list = array(
    512 => 10,
    3 << 10 => 10,
    8 << 10 => 10,
    20 << 10 => 4,
    30 << 10 => 2,
    50 << 10 => 2,
    80 << 10 => 2,
    96 << 10 => 2,
    128 << 10 => 2,
    224 << 10 => 2,
    256 << 10 => 2,
    512 << 10 => 1,
    1024 << 10 => 1,
);

var_dump($_bsize_list);
