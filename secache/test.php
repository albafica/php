<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('secache.php');
$cache = new secache;
$cache->workat('cachedata');

$key = md5('test'); //必须自己做hash，前4位是16进制0-f,最长32位。
$value = '值数据'; //必须是字符串

$cache->store($key, $value);
if ($cache->fetch($key, $return)) {
    echo '<li>' . $key . '=>' . $return . '</li>';
} else {
    echo '<li>Data get failed! <b>' . $key . '</b></li>';
}