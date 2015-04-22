<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function order_source() {
    $useragent = strtolower($_SERVER["HTTP_USER_AGENT"]);
    // iphone  
    $is_iphone = strripos($useragent, 'iphone');
    if ($is_iphone) {
        return 'iphone';
    }
    // android  
    $is_android = strripos($useragent, 'android');
    if ($is_android) {
        return 'android';
    }
    // 微信  
    $is_weixin = strripos($useragent, 'micromessenger');
    if ($is_weixin) {
        return 'weixin';
    }
    // ipad  
    $is_ipad = strripos($useragent, 'ipad');
    if ($is_ipad) {
        return 'ipad';
    }
    // ipod  
    $is_ipod = strripos($useragent, 'ipod');
    if ($is_ipod) {
        return 'ipod';
    }
    // pc电脑  
    $is_pc = strripos($useragent, 'windows nt');
    if ($is_pc) {
        return 'pc';
    }
    return 'other';
}
var_dump(strtolower($_SERVER["HTTP_USER_AGENT"]));
var_dump(order_source());
