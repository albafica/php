<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user = array(
    0 => array(
        'id' => 1,
        'name' => '张三',
        'email' => 'zhangsan@sina.com',
    ),
    1 => array(
        'id' => 2,
        'name' => '李四',
        'email' => 'lisi@163.com',
    ),
    2 => array(
        'id' => 5,
        'name' => '王五',
        'email' => '10000@qq.com',
    ),
);
$ids = array();
$ids = array_map('array_shift', $user);
var_dump($ids);
